<?php

include ("../Config/Conexion.php");

$prueba = $_POST['NumeroPrueba'];
$resultado = $_POST['CorrectaIncorrecta'];


$sql = "INSERT INTO pruebas_registro(prueba_numero,correcta_incorrecta) VALUES('$prueba','$resultado')";

$resultado = mysqli_query(mysql: $conexion, query: $sql);

if ($resultado === TRUE) {
   header(header: "location:../Prueba.php");
} else {
  echo "Producto y precio no insertada";
}

