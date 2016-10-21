
<?php
include 'config/db.conf.php';
$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');


$SQL="SELECT * from categoria";
$result = pg_query ($db, $SQL ) or die("Error en la consulta SQL");
$registros= pg_num_rows($result);
$salto="<br>";
//mostrar resultados
for ($i=0;$i<$registros;$i++)
{

$row = pg_fetch_array ($result,$i );
echo $row["pk"];
echo $row["name"];
echo $salto;

}
?>
