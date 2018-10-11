<?php
    
    include 'clases/conexion.php';
    include 'clases/categoria.php';

    $objConexion = new conexion();
    $objCategoria = new categoria();

    $conexion = $objConexion->conectar();
    $categorias = $objCategoria->consultar($conexion);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Codigo</th>
            <th>Editar</th>
            <th>Eliminar</th>
                        
        </tr>    
        <?php
            while($categoria = mysqli_fetch_array($categorias)){
        ?>
            <tr>
                <td><?php echo $categoria['nombre'] ?></td>
                <td><?php echo $categoria['descripcion'] ?></td>
                <td><?php echo $categoria['codigo'] ?></td>
                <td><a href="editar.php?id=<?php echo $categoria['id_categoria'] ?>"> Editar</a></td> 
                <td><a href="controladores/eliminarC.php?id=<?php echo $categoria['id_categoria'] ?>"> Eliminar</a></td> 
                <td></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <br><a href='menu.html'><button class="boton">Volver al Menu</button></a>
</body>
</html>