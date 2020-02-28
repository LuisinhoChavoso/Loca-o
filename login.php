<?php
include(conexao.php);
 ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>
    <form class="home" action="home.html" method="post">
      <div class="login-wrap">
      	<div class="login-html">
      		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Entrar</label>
      		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Cadastra-se</label>
      		<div class="login-form">
      			<div class="sign-in-htm">
      				<div class="group">
      					<label for="user" class="label">Nome de usuario</label>
      					<input id="user" type="text" class="input">
      				</div>
      				<div class="group">
      					<label for="pass" class="label">senha</label>
      					<input id="pass" type="password" class="input" data-type="password">
      				</div>
      				<div class="group">
      					<input id="check" type="checkbox" class="check" checked>
      					<label for="check"><span class="icon"></span> matenha-me conectado</label>
      				</div>
      				<div class="group">
      					<input type="submit" class="button" value="Entrar">
      				</div>
      				<div class="hr"></div>
      				<div class="foot-lnk">
      					<a href="#forgot">esqueceu a senha ?</a>
      				</div>
      			</div>
      			<div class="sign-up-htm">
      				<div class="group">
      					<label for="user" class="label">Nome de usuario</label>
      					<input id="user" type="text" class="input">
      				</div>
      				<div class="group">
      					<label for="pass" class="label">Senha</label>
      					<input id="pass" type="password" class="input" data-type="password">
      				</div>
      				<div class="group">
      					<label for="pass" class="label">Repetir a Senha</label>
      					<input id="pass" type="password" class="input" data-type="password">
      				</div>
      				<div class="group">
      					<label for="pass" class="label">Endereço de email</label>
      					<input id="pass" type="text" class="input">
      				</div>
      				<div class="group">
      					<input type="submit" class="button" value="Cadastrar-se">
      				</div>
      				<div class="hr"></div>
      				<div class="foot-lnk">
      					<label for="tab-1">Lembrar de mim ?</a>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </form>
  </body>
</html>
