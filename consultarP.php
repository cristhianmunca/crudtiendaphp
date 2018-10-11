<?php
    
    include "clases/conexion.php";
    include "clases/producto.php";

    $objConexion = new conexion();
    $objProducto = new producto();

    $conexion = $objConexion->conectar();
    $productos = $objProducto->consultar($conexion);

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
            <th>Valor</th>
            <th>Cantidad</th>
            <th>Categoria</th>
                        
        </tr>    
        <?php
            while($producto = mysqli_fetch_array($productos)){
        ?>
            <tr>
                <td><?php echo $producto['nombre_Pro'] ?></td>
                <td><?php echo $producto['valor'] ?></td>
                <td><?php echo $producto['cantidad'] ?></td>
                <td><?php echo $producto['categoria'] ?></td>
                <td><a href="editarP.php?id=<?php echo $producto['id_producto'] ?>"> Editar</a></td> 
                <td><a href="controladores/eliminarP.php?id=<?php echo $producto['id_producto'] ?>"> Eliminar</a></td> 
                <td></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <br><a href='menu.html'><button class="boton">Volver al Menu</button></a>
</body>
</html>