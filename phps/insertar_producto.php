<?php
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');


$name=$_POST['name'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$categoria=$_POST['categoria'];
$foto=$_POST['foto'];


$sql = "INSERT INTO producto(name, categoria, precio, stock, foto) VALUES ('$name', '$categoria', '$precio', '$stock', 'foto');";
$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
echo "¡Los datos fueron ingresados.\n";

?>