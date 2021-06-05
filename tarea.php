<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM anotaciones";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LISTA DE TAREAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese Tarea</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="materia" placeholder="materia">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha">
                                    <input type="text" class="form-control mb-3" name="tipo" placeholder="tipo">
                                    <input type="text" class="form-control mb-3" name="estado" placeholder="estado">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>materia</th>
                                        <th>fecha</th>
                                        <th>tipo</th>
                                        <th>estado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['materia']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['tipo']?></th>
                                                <th><?php  echo $row['estado']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['materia'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['materia'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>