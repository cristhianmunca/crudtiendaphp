<?php

include "../clases/conexion.php";
include "../clases/categoria.php";


$objConexion = new conexion();
$objCategoria = new categoria();

$conexion = $objConexion->conectar();
echo $objCategoria->registrar($conexion, $_POST['nombre'], $_POST['descripcion'], $_POST['codigo']);

echo "<br><a href='../consultar.php'><button>Ver Registros</button></a>";
echo "<br><a href='../menu.html'><button>Volver al Menu</button></a>";