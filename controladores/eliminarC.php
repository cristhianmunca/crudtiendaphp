<?php

include '../clases/conexion.php';
include '../clases/categoria.php';

$objConexion = new conexion();
$objCategoria = new categoria();

$conexion = $objConexion->conectar();
echo $objCategoria->eliminar($conexion, $_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br><a href='../menu.html'><button>Volver al Menu</button></a>
</body>
</html>