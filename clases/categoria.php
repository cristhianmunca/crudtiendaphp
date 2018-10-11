<?php

class categoria{

    public function registrar($conexion, $nombre, $descripcion, $codigo){
        
        $query = " call registar_Categoria('$nombre', '$descripcion', $codigo )";
        $consulta = mysqli_query($conexion, $query);
        
        if($consulta){
            $respuesta = "Categoria registrada";
        }else{
            $respuesta = " Problemas al registar";
        }
            return $respuesta;
    }

    public function consultar($conexion){
        $query = "select * from ver_Categoria";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultarId($conexion, $id){
        $query = "call consultar_Categoria($id)";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar($conexion, $id, $nombre, $descripcion, $codigo){
        $query = "call editar_Categoria($id, $nombre, $descripcion, $codigo )";
        
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Categoria actualizado";
        }else{
            $respuesta = "Problemas al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion, $id){
        $query = "call eliminar_Categoria($id)";
        $consulta = mysqli_query($conexion, $query);
       
        if($consulta){
            $respuesta = "Categoria eliminado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;

        
    }
}

