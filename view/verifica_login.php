<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: ../page_login.php');
	exit();
}