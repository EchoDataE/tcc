<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['f_username']) OR empty($_POST['f_email'] OR empty($_POST['f_senha'])))) {
      header("Location: index.html"); exit;
  }

  // Tenta se conectar ao servidor MySQL
  mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('bancadorock1') or trigger_error(mysql_error());

  $usuario = mysql_real_escape_string($_POST['f_username']);
  $email = mysql_real_escape_string($_POST['f_email']);
  $senha = mysql_real_escape_string($_POST['f_senha']);

  // Validação do usuário/senha digitados
  $sql = "SELECT `username`, `email`, `senha` FROM `user` WHERE (`username` = '".$usuario ."') AND (`email` = '". sha1($email) ."') AND (`senha` = '". sha1($senha)   ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysql_query($sql);
  if (mysql_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysql_fetch_assoc($query);
  }

  ?>