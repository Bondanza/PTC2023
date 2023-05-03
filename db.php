<?php
$host = 'localhost';
$port = '5432';
$dbname = 'mves';
$user = 'postgres';
$password = 'info2023';

// Connect to the database
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
  echo "Error de conexion";
  exit;
}
?>