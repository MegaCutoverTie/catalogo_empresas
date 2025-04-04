<?php
include "seguridad.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        include("menu.php");
        ?>
    </div>
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        $(document).ready(function (){
            //$("#btn2").attr("disable", true);
        });
        function salir()
        {
            location.href="salir.php"
        }
        function crear()
        {
            location.href="crear.php"
        }
        function modificar()
        {
            location.href="modificar.php"
        }
        function eliminar()
        {
            location.href="eliminar.php"
        }
    </script>
</body>
</html>