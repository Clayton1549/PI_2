﻿<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style>
		*{padding: 0;margin: 0;box-sizing: border-box;}
		body{background-color: #ddd;}
		.login{display: flex;justify-content: center;align-items: center;position: relative;z-index: 1;min-height: 100vh;}
		.login--box{max-width: 350px;width: 100%;background-color: rgba(0,0,0,.8);color: #fff;border-radius: 5px;padding: 20px;font-family: monospace;font-size: 20px;}
		.login--label{display: block;width: 100%;font-size: 14px;margin-bottom: 4px;}
		.login--input{display: block;width: 100%;font-size: 20px;margin-bottom: 20px;padding: 10px;}
		.login--submit{font-size: 30px;font-weight: bold;background-color: #eee;color: #666;border-radius: 4px;width: 100%;display: block;text-align: center;padding: 10px;cursor: pointer;}
	</style>

</head>
<body>

<?php
if(isset($mg)){
	
	echo $smg;
		}
		?>
<bgcolor="#A5ACAF">
	<div class="login">
		<div class="login--box">
			<form class="login-wrap">
				<label class="login--label" for="Login">Login</label>
				<input class="login--input" type="text" name="" id="Login">
				<label class="login--label" for="Senha">Senha</label>
				<input class="login--input" type="password" name="" id="Senha">
				<butto class="login--submit" type="submit">LOGAR</button>
			</form>
		</div>
	</div>
</body>
</html>