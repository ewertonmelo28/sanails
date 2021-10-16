<?php
session_start();
if (!$_SESSION['usuario']) {
	header('Location: ../pages/page_login.php');
	exit();
}
