<?php
session_start();
session_destroy();
if(!$_SESSION['user_pk']) {
	echo "session closed";
}else {
	echo "session opened";
}
?>