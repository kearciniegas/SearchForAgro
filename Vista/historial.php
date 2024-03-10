<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: iniciarSe.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Progreso</title>
        <!-- Favicon-->
        <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="CSS/style.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet"href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/stylo.css">
        <style>
            .mt-5{
                margin-top: 150px !important;

            }
            body{
              background-image: url(CSS/IMG/fertilizacion-de-fondo.jpg);
            }
        </style>



    </head>

    <body class="d-flex aling-items-center">
        <!-- Responsive navbar-->
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">




            <a href="#" class="navbar-brand"><span class="text-primary">Search</span> For Agro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS" aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="historial.php" class="nav-link">Progreso</a>
                    </li>
                    <li class="nav-item">
                        <a href="cultivos.php" class="nav-link">Cultivos</a>
                    </li>
                    <li class="nav-item">
            <a href="nosotros.php" class="nav-link">Nosotros</a>
          </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="cont mt-5 ">
        <h1>Registro de Cultivos</h1>
        <form id="cultivoForm">
            <label for="cultivo">Tipo de Cultivo:</label>
            <input type="text" id="cultivo" name="cultivo">
            <label for="fecha-siembra">Fecha de Siembra:</label>
            <input type="date" id="fecha-siembra" name="fecha-siembra">
            <label for="fecha-cosecha">Fecha de Cosecha:</label>
            <input type="date" id="fecha-cosecha" name="fecha-cosecha">
            <label for="rendimiento">Rendimiento:</label>
            <input type="text" id="rendimiento" name="rendimiento">
            <button  type="submit">Agregar Cultivo</button>
        </form>

        <h2>Historial de Cultivos</h2>
        <table id="cultivoTable">
            <tr>
                <th>Tipo de Cultivo</th>
                <th>Fecha de Siembra</th>
                <th>Fecha de Cosecha</th>
                <th>Rendimiento</th>
            </tr>
        </table>

        <h2>Estadísticas</h2>
        <div id="statistics" class="statistics">
            <!-- Aquí se mostrarían dinámicamente las estadísticas -->
        </div>
        
    </div>
    
    

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="scripto.js"></script>
</body>
</html>
