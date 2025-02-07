<?php

include ("../Config/conexion.php");

$id = $_POST['Id'];
$Prueba = $_POST['pruebas'];
$Resultado = $_POST['resultados'];


$sql ="UPDATE pruebas_registro SET
          id='".$id."',
          prueba_numero='".$Prueba."', 
          correcta_incorrecta='".$Resultado."' WHERE id= ".$id."";

if ($resultado = $conexion->query(query: $sql)) {
            header(header: "location:../prueba.php");
}