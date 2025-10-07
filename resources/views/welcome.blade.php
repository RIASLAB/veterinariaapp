<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lugo Vet - Sistema de Gestión</title>
<link rel="icon" href="images/logo.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/modooscuro.css">
</head>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar">
      <h1 class="logo">🐾 Lugo Vet</h1>
      <ul class="nav-links">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#quienes">Quiénes Somos</a></li>
        <li><a href="#acerca">Acerca</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#equipo">Conoce a Nuestro Equipo</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
      <button id="darkModeToggle">🌙</button>
    </nav>
  </header>

  <!-- Hero -->
    <!-- Hero -->
  <section id="inicio" class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h2>Cuidamos lo que más quieres 🐾</h2>
      <p>Tu mascota merece lo mejor. En Lugo Vet ofrecemos servicios de estética, salud y cuidado con profesionales dedicados.</p>

      <div class="botones-hero">
        <a href="#servicios" class="btn">Ver servicios</a>

        <!-- 🔹 Botón de Login -->
        <a href="{{ route('login') }}" class="btn-login">Iniciar Sesión</a>

        <!-- 🔹 Botón de Registro -->
        <a href="{{ route('register') }}" class="btn-register">Registrarse</a>
      </div>
    </div>
  </section>


  <!-- Quiénes somos -->
  <section id="quienes" class="section">
    <h2>Quiénes Somos</h2>
    <p>
      En Lugo Vet nos apasiona el bienestar animal. Somos una clínica veterinaria ubicada en Florida, Valle del Cauca, 
      con un equipo comprometido en ofrecer un servicio humano, profesional y de calidad para cada mascota.
    </p>
  </section>

  <!-- Acerca -->
  <section id="acerca" class="section alt">
    <h2>Acerca de Nosotros</h2>
    <p>
      Nuestro proyecto integrador busca modernizar la gestión de la veterinaria mediante un sistema web 
      que permite administrar clientes, mascotas, citas y servicios de forma ágil y organizada.
    </p>
  </section>

  <!-- Servicios -->
<section id="servicios" class="section">
  <h2>Nuestros Servicios</h2>
  <div class="cards">
    <div class="card">
      <img src="images/banio.png" alt="Baños">
      <h3>Baños para Mascotas</h3>
      <p>Baños especializados con productos de calidad para la salud y el brillo del pelaje.</p>
    </div>
    <div class="card">
      <img src="images/corte.png" alt="Cortes">
      <h3>Cortes de Pelo</h3>
      <p>Estilos personalizados y cortes higiénicos adaptados a cada raza.</p>
    </div>
    <div class="card">
      <img src="images/dental.png" alt="Limpieza dental">
      <h3>Limpieza Dental</h3>
      <p>Higiene bucal profesional para prevenir enfermedades y mal aliento.</p>
    </div>
    <div class="card">
      <img src="images/estetica.png" alt="Estética">
      <h3>Estética Animal</h3>
      <p>Tratamientos estéticos completos para mantener a tu mascota saludable y feliz.</p>
    </div>
  </div>
</section>


  
  <!-- Nuestro Equipo -->
<section id="equipo" class="section alt">
  <h2>Conoce a Nuestro Equipo</h2>
  <div class="cards">
    <div class="card">
      <img src="images/dueños.png" alt="programadores">
      <h3>Jhon Edinson Riascos y Luis Fernando Majin</h3>
      <p>Estudiantes de la UNIAJC.</p>
    </div>
    
</section>

<!-- Mapa -->
<section id="mapa" class="section">
  <h2>¿Cómo llegar?</h2>
  <p>Estamos ubicados en Florida, Valle del Cauca. ¡Ven y visítanos!</p>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d995.7435019678264!2d-76.30015115286761!3d3.356511102408202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1756695466644!5m2!1ses-419!2sco"
      width="100%" height="400" style="border:0;" 
      allowfullscreen="" loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>

  <!-- Contacto -->
  <footer id="contacto">
    <h2>Contacto</h2>
    <p>📍 Cl. 10 #18-37, Florida, Valle del Cauca</p>
    <p>📧 contacto@lugovet.com | 📞 +57 3145517341</p>
    <p>&copy; 2025 Lugo Vet - Proyecto Integrador</p>
  </footer>

  <script src="js/script.js"></script>
  <script src="js/modooscuro.js"></script>
</body>
</html>