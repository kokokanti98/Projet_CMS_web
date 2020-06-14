<?php
	session_start();
	session_destroy();
	header('location:connexionuser.php');
	exit;
?>