<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Mascota;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;
        $citas = Cita::with('mascota')
            ->when($q, fn($query) =>
                $query->where('motivo', 'like', "%$q%")
                      ->orWhereHas('mascota', fn($q2) => $q2->where('nombre', 'like', "%$q%"))
            )
            ->orderBy('fecha', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('citas.index', compact('citas', 'q'));
    }

public function create()
{
    $mascotas = \App\Models\Mascota::all();
    return view('citas.create', compact('mascotas'));
}



    public function store(Request $request)
    {
        $data = $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'motivo' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora' => 'required',
            'observaciones' => 'nullable|string',
        ]);

        \App\Models\Cita::create($data);
        return redirect()->route('citas.index')->with('ok', 'Cita registrada correctamente.');
    }

    public function edit(Cita $cita)
    {
        $mascotas = Mascota::all();
        return view('citas.edit', compact('cita', 'mascotas'));
    }

    public function update(Request $request, Cita $cita)
    {
        $data = $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'motivo' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora' => 'required',
            'observaciones' => 'nullable|string',
        ]);

        $cita->update($data);
        return redirect()->route('citas.index')->with('ok', 'Cita actualizada correctamente.');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return back()->with('ok', 'Cita eliminada correctamente.');
    }
}
