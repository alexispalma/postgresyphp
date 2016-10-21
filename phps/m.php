<?php 
include 'config/db.conf.php';
$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$sql="SELECT * FROM categoria";
$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());

//$result=$db->query($sql);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="container">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>ID_Producto</th>
        <th>nombre</th>
         </tr>
    </thead>
    <tbody>
    <?php 
    if ($result->num_rows > 0) {
            while($row = $result->pg_fetch_assoc()) {
                echo "<tr>
                    <td>".$row["pk"]."</td>
                    <td>".$row["name"]."</td>
                    </tr>";
            }
    }else{
        echo "<tr><td colspan='100%'>No hay datos que Mostrar</td></tr>";
    }

    ?>

    </tbody>
  </table>
</div>
</body>
</html>
Y me muestra

