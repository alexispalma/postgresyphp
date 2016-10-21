<?php 

include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');
$pk = $_POST['pk']; 

$sql = "DELETE from users where pk = '$pk'";



$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error()); 


echo " 
<p>El registro ha sido eliminado con exito.</p> 


"; 
?>
