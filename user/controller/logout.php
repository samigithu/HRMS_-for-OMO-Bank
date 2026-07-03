<?php
	session_start();
	include_once('connect.php');
	
	$dbs = new database();
	$db=$dbs->connection();
	$emp = $_SESSION['employee_id']['employee_id'];
		unset($_SESSION['employee_id']);
		session_destroy();
		echo "<script>window.location = '../../index.php';</script>";
?>