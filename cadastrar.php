<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$tel = mysqli_real_escape_string($conexao, trim($_POST['tel']));
$senha = mysqli_real_escape_string($conexao, trim(($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: index.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro, tel) VALUES ('$nome', '$usuario', '$senha', NOW(), $tel)";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: login1.php');
exit;
?>