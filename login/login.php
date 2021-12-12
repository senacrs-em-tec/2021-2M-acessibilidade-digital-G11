<?php
include_once '../includes/_head.php';
?> 
<main>
  <h1>Login</h1>
  <form action="login-processa.php" method="post">
    <label for="email">E-mail</label>
    <input type="text" name="email"/>
    <label for="senha">Senha</label>
    <inupt type="text" name="senha"/>
      <input type="submit" value="Acesso"/>
  </form>