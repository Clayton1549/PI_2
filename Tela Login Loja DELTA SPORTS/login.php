<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta charset="UTF-8">
	<title>Login</title>
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
			<form class="L_wrap">
				<label class="L_label" for="Login">Login</label>
				<input class="L_input" type="text" name="" id="Login">
				<label class="L_label" for="Senha">Senha</label>
				<input class="L_input" type="password" name="" id="Senha">
				<butto class="L_submit" type="submit">LOGAR</button>
			</form>
		</div>
	</div>
</body>
</html>