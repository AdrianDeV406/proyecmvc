<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/fonts/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- include "vistas/contenido/contenido.php"; -->
     <!-- include "vistas/footer/footer.php";"; -->
  <?php
  
    include "vistas/modulos/menu.php";
    if (isset($_GET["ruta"])){
      if ($_GET["ruta"] == "inicio" ||
      $_GET["ruta"] == "practica" ||
        $_GET["ruta"] == "productos"
      ){
        include "modulos/".$_GET["ruta"].".php";
      }
      else {
        include "modulos/404error.php";
      }
    }
    else 
    {
      include "modulos/inicio.php";
    }

    include "vistas/modulos/footer.php";
  ?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="vistas/fonts/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/fonts/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vistas/dist/js/demo.js"></script>
</body>
</html>
