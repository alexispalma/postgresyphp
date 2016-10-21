<!DOCTYPE html>
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
<ul class="nav nav-tabs" role="tablist"><a class="btn btn-success" href="administraccion.html">Volver al inicio</a>
    <li role="presentation"><a href="registar_user.html" aria-controls="profile" role="tab" data-toggle="tab">Agregar usuario</a></li>
    <li role="presentation"><a href="#modificar_prod" aria-controls="profile" role="tab" data-toggle="tab">Modificar usuario</a></li>
     <li role="presentation" class="active" ><a href="eliminar_user.php" aria-controls="home" role="tab" data-toggle="tab">Eliminar usuario</a></li>
  </ul>
     <div class="jumbotron">
      <div class="container">
        <h2> eliminar usuario </h2>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>codigo</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>rol</th>
        </tr>
        <?php
          include 'phps/config/db.conf.php';

          $db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

           $sql = "SELECT users.pk, users.name, users.lastname, role.name AS role FROM users LEFT JOIN role ON role.pk=users.role";


           $result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
           while($row = pg_fetch_array($result))
           {
           echo "<tr><th>" . 
           $row["pk"] . "</th>";
            echo "<th>" . 
           $row["name"] . "</th>";
           echo "<th>" . 
           $row["lastname"] . "</th>";
           echo "<th>" . 
           $row["role"] . "</th></tr>";
  
  }
?>
  </table>



        <form method="POST" action="phps/borrar_user.php"> 
     
            <b>codigo del registro a eliminar: </b></td> 
            <div class="form-group">
            <input type="text" placeholder="codigo" name="pk"  class="form-control">
            </div>
            <button type="submit" class="btn btn-success">eliminar</button>
       
        </div>
      </div>
      </form> 
 </div>
    </div>
</body>
</html>

