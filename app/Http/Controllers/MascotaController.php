<?php
namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;
        $mascotas = Mascota::when($q, function ($query) use ($q) {
            $query->where('nombre', 'like', "%$q%")
                  ->orWhere('especie', 'like', "%$q%")
                  ->orWhere('dueno', 'like', "%$q%");
        })->orderBy('id', 'desc')->paginate(10)->withQueryString();

        return view('mascotas.index', compact('mascotas', 'q'));
    }

    public function create()
    {
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'raza' => 'nullable|string|max:255',
            'edad' => 'nullable|integer|min:0',
            'dueno' => 'required|string|max:255',
        ]);

        Mascota::create($data);
        return redirect()->route('mascotas.index')->with('ok', 'Mascota registrada correctamente.');
    }

    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'raza' => 'nullable|string|max:255',
            'edad' => 'nullable|integer|min:0',
            'dueno' => 'required|string|max:255',
        ]);

        $mascota->update($data);
        return redirect()->route('mascotas.index')->with('ok', 'Mascota actualizada correctamente.');
    }

    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return back()->with('ok', 'Mascota eliminada correctamente.');
    }
}
