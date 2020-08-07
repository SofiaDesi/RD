<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: login1.php');
	exit();
}