
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<title></title>
</head>
<body>

     <div class="jumbotron">
      <div class="container">
       <h2>Productos</h2>
      <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>codigo</th>
            <th>nombre</th>
            <th>precio</th>
            <th>stock</th>
            <th>categoria</th>
            <th>foto</th>
        </tr>
        <?php
          include 'phps/config/db.conf.php';

          $db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

           $sql = "SELECT producto.pk, producto.name, producto.precio,  producto.stock, categoria.name AS categoria FROM producto LEFT JOIN categoria ON categoria.pk=producto.categoria";


           $result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
           while($row = pg_fetch_array($result))
           {
           echo "<tr><th>" . 
           $row["pk"] . "</th>";
            echo "<th>" . 
           $row["name"] . "</th>";
           echo "<th>" . 
           $row["precio"] . "</th>";
           echo "<th>" . 
           $row["stock"] . "</th>";
            echo "<th>" . 
           $row["categoria"] . "</th>";
             echo "<th>" .
           $row["foto"] ."</th></tr>";
  
  }
?>
  </table>
        
        </div>
      </div>
<script type="text/javascript" src="assets/js/jquery-1.9.0rc1.js"></script>

</body>
</html>























