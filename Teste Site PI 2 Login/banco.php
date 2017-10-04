<?php

$db_host = "usuario.database.windows.net";
$db_name = "dbUsuario";
$db_user = "usuario";
$db_pass = "password";
$dsn = "Driver={SQL Server};Server=$db_host;Port=1433;Database=$db_name;";

if(!$db = odbc_connect($dsn, $db_user, $db_pass)){

	echo "ERRO AO CONECTAR AO BANCO DE DADOS";
	exit();
}
?>