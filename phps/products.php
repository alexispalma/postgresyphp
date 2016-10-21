<?php
include 'config/db.conf.php';
$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$sql = "SELECT producto.pk, producto.name, producto.precio,  producto.stock, categoria.name AS categoria FROM producto LEFT JOIN categoria ON categoria.pk=producto.categoria";

$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());

  while ($data = pg_fetch_array($result)) {
     $producto[] = array(
        'pk' => $data['pk'],
        'name' => $data['name'].''.$data['precio'].' '.$data['precio'].' '.$data['stock'].' '.$data['categoria']
        //'precio' => $data['precio'],
        //'stock' => $data['stock'],
        //'categoria' => $data['categoria']
        
     );
}
echo json_encode($producto);

?>
