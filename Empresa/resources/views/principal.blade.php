<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- FONT AWESOME -->
      <meta property="og:image" content="https://lh3.googleusercontent.com/a/AGNmyxYaJ3PrI2tT4LklCVyT91hWFNXeamC7o0q5Y8cY=s32">
      <script src="https://kit.fontawesome.com/2b5286e1aa.js" crossorigin="anonymous"></script>
      {{-- CSS --}}
      <link rel="stylesheet" href="./css/styles.css">
    <title>NOMBRE EMPRESA</title>
</head>
<body>
    


    {{-- NAVBAR --}}
<div class="navbar">
    <div class="logo">Logo</div>
    <nav>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
  </div>
  
  <!-- Contenido de la página -->


  {{-- HERO SECTION --}}
  <div class="content">
    <h1>Hero section</h1>
  
  </div>



{{-- formulario de contacto  --}}
<h1>Contacto</h1>
  
  <!-- Formulario de contacto -->
  <form action="#" method="post" class="contact-form">
    

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="name">Asunto:</label>
    <input type="text" id="asunto" name="asunto" required>

    <label for="message">Mensaje:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit">Enviar mensaje</button>
  </form>



{{-- pie de pagina --}}

  <footer class="footer">
    <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
  </footer>


</body>
</html>