<?php 

// Conexão com o banco de dados
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '1234');
define('DB', 'phpaula');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar ao banco de dados');
?>