<?php

    include "clases/conexion.php";
    include "clases/categoria.php";

    $objConexion = new conexion();
    $objCategoria = new categoria();

    $conexion = $objConexion->conectar();
    $datosCategoria = $objCategoria->consultarId($conexion, $_GET['id']);
    
    $nombre;
    $descripcion;
    $codigo;
    $id;

    while($tienda = mysqli_fetch_array($datosCategoria)){
        $nombre = $tienda['nombre'];
        $descripcion = $tienda['descripcion'];
        $codigo = $tienda['codigo'];
        $id = $tienda['id_categoria'];
    
    }


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
        <form action="controladores/editarC.php" method="POST">

            <input type="hidden" name="id" value=<?php echo "$id"?>>
            <label for="">Nombre </label><input type="Text" value="<?php echo $nombre; ?>" name="nombre" id="nombre"><br>
            <label for="">Descripcion</label><input type="Text" value="<?php echo $descripcion; ?>" name="descripcion" id="descripcion"><br>
            <label for="">Codigo </label><input type="Text" value="<?php echo $codigo; ?>" name="codigo" id="codigo"><br>

             <input type="Submit" name="Editar" value="Actualizar">

        </form>

        <br><a href='menu.html'><button>Volver al Menu</button></a>

    </body>
</html>