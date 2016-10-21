<?php
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$sql = "SELECT categoria.pk, categoria.name FROM categoria";


$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());

while ($data = pg_fetch_array($result)) {
    $categoria[] = array(
        'pk' => $data['pk'],
        'name' => $data['name']." ".$data['pk']
     );
}
echo json_encode($categoria);
?>
