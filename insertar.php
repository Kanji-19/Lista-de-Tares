<?php
include("conexion.php");
$con=conectar();

$materia=$_POST['materia'];
$fecha=$_POST['fecha'];
$tipo=$_POST['tipo'];
$estado=$_POST['estado'];


$sql="INSERT INTO anotaciones VALUES('$materia','$fecha','$tipo','$estado')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: tarea.php");
    
}else {
}
?>