<?php

include("conexion.php");
$con=conectar();

$materia=$_POST['materia'];
$fecha=$_POST['fecha'];
$tipo=$_POST['tipo'];
$estado=$_POST['estado'];

$sql="UPDATE anotaciones SET  fecha='$fecha',tipo='$tipo',estado='$estado' WHERE materia='$materia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tarea.php");
    }
?>