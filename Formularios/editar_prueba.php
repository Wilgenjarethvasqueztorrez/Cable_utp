<!doctype html>
<html lang="es">
  <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar prueba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
 <h1 class="bg-black p-2 text-white text-center">Editar prueba</h1>
 <br>
 <form class="container" action="../CRUD/editar_prueba.php" method="post">
  <?php
   include ('../Config/Conexion.php');

   $sql ="SELECT * FROM pruebas_registro WHERE id =".$_GET['Id'];
   $resultado = $conexion->query(query: $sql);

   $row = $resultado->fetch_assoc();
  ?>

 <!--Traer id-->
 <div class="mb-3">
    <input type="hidden" class="form-control" name="Id" value="<?php echo $row['id']; ?>">
  </div>

  <!--Traer datos de cantidad disponible del producto-->
 <div class="mb-3">
    <label class="form-label">Prueba actual</label>
    <input type="text" class="form-control" name="pruebas" value="<?php echo $row['prueba_numero']; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Correcta e incorrecta</label>
    <input type="text" class="form-control" name="resultados" value="<?php echo $row['correcta_incorrecta']; ?>">
  </div>
 
  <div class="text-center">
   <button type="submit" class="btn btn-danger">Actualizar</button>
   <a href="../lote.php" class="btn btn-dark">Regresar</a>
  </div>
 </form>
</body>