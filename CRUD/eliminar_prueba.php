<?php

include ("../Config/Conexion.php");

$Id = $_GET["Id"];
$sql = "DELETE FROM pruebas_registro WHERE id=".$Id."";

$query = mysqli_query(mysql: $conexion,query: $sql);

if ($query === TRUE) {
   header(header: "location: ../prueba.php");
} 