<?php
define("HOST", "127.0.0.1");
define("USUARIO", "root");
define("DB", "Locadora");

$conexao = mysqli_connect("HOST", "USUARIO", "DB",) or die ("Não foi Possivel Conectar com o Banco");

?>
