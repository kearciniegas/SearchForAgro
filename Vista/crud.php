<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: Admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/IMG/iniciarSe.css">
  <link rel="stylesheet" href="CSS/IMG/crud.css">

  <link rel="icon" type="image/png" href="CSS/IMG/favi.png">
  <style>
    body {
      border: none;
      background-image: url(CSS/IMG/fertilizacion-de-fondo.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .container1 {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="file"] {
            padding: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>    
</head>


<body>
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
            <a href="index.php" class="nav-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a href="cultivos.php" class="nav-link">Cultivos</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>
</header>
    <div class="container1">
        <h1>CRUD Template</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="pests">Plagas:</label>
                <input type="text" id="pests" name="pests">
            </div>
            <div class="form-group">
                <label for="solution">Solución:</label>
                <textarea id="solution" name="solution" rows="4"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>

    <footer>
        <div class="footer__p">
            <p class="footer__p-color">&copy; 2023 Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>