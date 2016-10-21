<?php
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$sql = "SELECT users.pk, users.name, users.lastname, role.name AS role FROM users LEFT JOIN role ON role.pk=users.role";



$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());

while ($data = pg_fetch_array($result)) {
    $users[] = array(
        'pk' => $data['pk'],
        'name' => $data['name'].' '.$data['lastname']   
        //'role' => $data['role']
     );
}
echo json_encode($users);
?>