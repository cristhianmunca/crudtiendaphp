<?php

include '../clases/conexion.php';
include '../clases/tienda.php';

$objConexion = new conexion();
$objTienda = new tienda();

$conexion = $objConexion->conectar();
echo $objTienda->eliminar($conexion, $_GET['id_producto']);

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