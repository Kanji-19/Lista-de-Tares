<?php

include("conexion.php");
$con=conectar();

$materia=$_GET['id'];

$sql="DELETE FROM anotaciones  WHERE materia='$materia'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tarea.php");
    }
?>