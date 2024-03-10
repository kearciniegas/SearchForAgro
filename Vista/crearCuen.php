





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iniciar session</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/inicioSe.css">
  <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
  <style>
    body{
      border: none;
      background-image: url(CSS/IMG/fertilizacion-de-fondo.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
    
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">




      <a href="#" class="navbar-brand"><span class="text-primary">Search</span> For Agro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarS">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="../index.html" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="historial.html" class="nav-link">Progreso</a>
          </li>
          <li class="nav-item">
            <a href="cultivos.php" class="nav-link">Cultivos</a>
          </li>          
          <li class="nav-item">
            <a href="nosotros.php" class="nav-link">Nosotros</a>
          </li>
          <li class="nav-item">
            <a href="iniciarSe.php" class="nav-link">iniciar sesión</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>

<body>
  <div class="h-auto form-container">
    <p class="title">Registrate</p>

    <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <?php

$conexion = new mysqli("localhost:3308", "root", "", "search_with_agro");


if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $numero = $_POST["numero"];
    $cedula = $_POST["cedula"];

 
    $stmt = $conexion->prepare("INSERT INTO usuarios (usuario, numero, cedula) VALUES (?, ?, ?)");

 
    if (!$stmt) {
        die("Error en la preparación de la consulta: " . $conexion->error);
    }

    $stmt->bind_param("sss", $usuario, $numero, $cedula);

    if ($stmt->execute()) {
        echo "Usuario registrado correctamente.";
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    $stmt->close();
}

$conexion->close();
?>

    
      <input type="text" class="input" placeholder="Nombre de Usuario" name="usuario" required>

      <input type="email" class="input" placeholder="Correo Electrónico" name="numero" required>
 
      <input type="password" class="input" placeholder="Contraseña"  name="cedula" required>

      <p class="mt-5 sign-up-label">
        ¿Ya tienes una cuenta? <a href="iniciarSe.php">Iniciar Sesión</a>
      </p>

      <input class="mt-3 text-decoration-none ini text-center form-btn" type="submit" value="Registrarse">
      <div class="mb-5 buttons-container">
      <div class="google-login-button">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" x="0px" y="0px" class="google-icon" viewBox="0 0 48 48" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
        c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
        c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
          <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
        C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
          <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
        c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
          <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
        c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
          </path>
        </svg>
        <span>Iniciar sesion con Google</span>
      </div>
    </div>

    </form>

  <footer>
    <div class="footer__p">
      <p class="footer__p-color">&copy; Search For Agro 2024</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>