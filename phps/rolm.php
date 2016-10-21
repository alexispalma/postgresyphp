<?php
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$sql = "SELECT role.pk, role.name, role.description FROM role";


$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());

while ($data = pg_fetch_array($result)) {
    $role[] = array(
        'pk' => $data['pk'],
        'name' => $data['name']." ".$data['pk'],
        'description' => $data['description']
     );
}
echo json_encode($role);
?>
