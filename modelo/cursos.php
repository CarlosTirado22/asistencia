<?php 
include("conexion.php");
session_start();
$id_usuario=$_SESSION['id_usuario']

class Curso{
    function listarCurso(){
        $sql= $conexion->query("SELECT * FROM cursos NATURAL JOIN usuarios_cursos WHERE id_usuario='$id_usuario' ");
         return $sql;
    }
}

?>