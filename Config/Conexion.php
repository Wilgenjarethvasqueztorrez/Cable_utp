<?php

  $host = "localhost";
  $user = "root";
  $pass = "wilgen12345";
  $db = "pruebas";

  $conexion =new mysqli(hostname: $host,username: $user,password: $pass,database: $db);

  if (!$conexion) {
    echo 'Conexion fallida';
  }