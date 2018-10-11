<?php

class tienda{

    public function registrar($conexion, $nombre, $descripcion, $codigo){
        
        echo $query = " INSERT INTO tienda (nombre, descripcion, codigo)
        VALUES ('$nombre', '$descripcion', '$codigo') ";
        $consulta = mysqli_query($conexion, $query);
        
        if($consulta){
            $respuesta = "Categoria registrada";
        }else{
            $respuesta = " Problemas al registar";
        }
            return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM tienda";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultarId($conexion, $id){
        $query = "SELECT * FROM tienda WHERE id_categoria = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;

    }

    public function editar($conexion, $id, $nombre, $descripcion, $codigo){
        $query = "UPDATE tienda SET nombre = '$nombre', descripcion = '$descripcion', codigo = '$codigo'
        WHERE id_categoria = $id";
        
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Categoria actualizada";
        }else{
            $respuesta = "Problemas al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion, $id){
        $query = "DELETE FROM tienda WHERE id_categoria = $id";
        $consulta = mysqli_query($conexion, $query);
       
        if($consulta){
            $respuesta = "Categoria eliminada";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;

        
    }

}