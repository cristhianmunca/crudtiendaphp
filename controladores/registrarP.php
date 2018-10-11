<?php

include "../clases/conexion.php";
include "../clases/producto.php";


$objConexion = new conexion();
$objProducto = new producto();

$conexion = $objConexion->conectar();
echo $objProducto->registrar($conexion, $_POST['nombre'], $_POST['valor'], $_POST['cantidad'], $_POST['categoria']);

echo "<br><a href='../consultarP.php'><button>Ver Registros</button></a>";
echo "<br><a href='../menu.html'><button>Volver al Menu</button></a>";