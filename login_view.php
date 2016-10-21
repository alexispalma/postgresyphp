<?php
	session_start();
	if($_SESSION['user_pk']) header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link REL=StyleSheet HREF="assets/css/style.css" TYPE="text/css" />
</head>

<body>
<div class="container">
<div class="login-container">
<div class="avatar">
  <img src="assets/images/logo3.png" width="102" height="99" />
</div>
<div class="form-box">
<div id="messages"></div>
<input type="text" name="username" id="username" placeholder="username" required="true">
<input type="password" name="password" id="password" placeholder="password" required="true">
<button class="btn btn-info btn-block login" name="iniciar" id="logear">Login</button>
</form>
</div>
</div>

</div>
<script type="text/javascript" src="assets/js/jquery-1.9.0rc1.js"></script>
<script type="text/javascript" src="assets/js/login/login.js"></script>
</body>
</html>
