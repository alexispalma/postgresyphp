<?php
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');


$name=$_POST['name'];

$sql = "INSERT INTO categoria(name) VALUES ('$name');";
$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
echo "¡Los datos fueron ingresados.\n";

?>