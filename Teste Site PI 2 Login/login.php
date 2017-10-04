<?php
session_start();
$usuario = '';
if (!isset($_SESSION['usuario'])) {
   if (isset($_POST['usuario'])) $usuario = $_POST['usuario'];
   if (isset($_POST['senha'])) $senha = $_POST['senha'];

   if ($usuario == 'Ola' && $senha == 'correta')  {
      echo 'Login Valido';
         $_SESSION['usuario']   = 'Ola';
   } else echo 'Login Invalido';
}
?>

<?php if (!isset($_SESSION['usuario'])) { ?>

<form method="POST" name="formDefault" action="login.php">
Login: <input type="text" name="usuario" value="<?php echo $usuario; ?>">
Senha: <input type="password" name="senha" value="<?php echo $senha; ?>">
<input type="submit" value="Enviar">
</form>

<?php }
else echo '<br /><a href="page2.php">page 2</a>';
?>

