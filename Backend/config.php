<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'inventory';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco, 3306);
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

?>