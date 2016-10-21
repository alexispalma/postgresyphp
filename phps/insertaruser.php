<?php
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');


$name=$_POST['name'];
$lastname=$_POST['lastname'];
$role=$_POST['role'];
$username=$_POST['username'];
$password=$_POST['password'];


$sql = "INSERT INTO users(name, lastname, role, username, password) VALUES ('$name', '$lastname', '$role', '$username', '$password');";
$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
echo "¡Los datos fueron ingresados.\n";

?>