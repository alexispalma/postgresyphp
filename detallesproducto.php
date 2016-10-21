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
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">inicio</a>
          <a class="navbar-brand" href="#">categoria</a>
          <a class="navbar-brand" href="administraccion.php">Administraccion</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
      <ul class="nav navbar-nav navbar-right">
        
        <li id="from_role"></li>

        <div class="btn-group" >
           <img src="assets/images/carrito.png" width="60" height="60" />
        </div>
        </li>
      </ul>
        </div>

            </ul>
        </div>
        </li>
      </ul>
        </div>
      </div>
    </nav>
     <div class="jumbotron">
      <div class="container">
      <section>
        
    <?php
       include 'phps/config/db.conf.php';

        $db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');
        $sql = "SELECT * from producto where pk=".$_GET['pk'];
         $result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
        while ($f=pg_fetch_array($result)) {
        ?>

            <div class="producto">
            <center>
                <img src="./fotos/<?php echo $f['foto'];?>"><br>
                <span>Codigo:<?php echo $f['pk'];?></span><br>
                <span><?php echo $f['name'];?></span><br>
                <span>Precio:<?php echo $f['precio'];?></span><br>
                
            </center>
        </div>
    <?php
        }
    ?>
        
        
    </section>

      </div>
      </div>
<script type="text/javascript" src="assets/js/jquery-1.9.0rc1.js"></script>

</body>
</html>
