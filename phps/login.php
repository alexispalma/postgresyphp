<?php
session_start();
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT pk, name, lastname,role FROM users WHERE username='$username' AND password = '$password' AND role = '1'";
$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
$data = pg_fetch_array($result);
if($data['pk']) {
    $_SESSION['user_pk'] = $data['pk'];
    $_SESSION['user_name'] = $data['name'];
    $_SESSION['user_lastname'] = $data['lastname'];
    echo "ok";
    
}else {
    echo "error";
}
?>