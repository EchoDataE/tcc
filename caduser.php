<?php
include_once("serverconnect.php");

$nuser = $_POST['f_username'];
$email = $_POST['f_email'];
$senha = $_POST['f_senha'];
$senhaconf = $_POST['f_senhaconf'];

$sql = "insert into user (username, email, senha) values ('$nuser, $email, $senha')";
$salve = mysqli_query($conexao, $sql);

mysqli_close($conexao);

/*session_start();
//iniciando vaiaveis

$username ="";
$email ="";

$errors = array();

//conectar bd
//'host', 'username', 'senha', 'bd'
$db = mysqli_connect('localhost', 'root', '', 'bancadorock1') or die("não conectou");

//user
$username = mysqli_real_escape_string($db, $_POST['f_username']);
$email = mysqli_real_escape_string($db, $_POST['f_email']);
$senha = mysqli_real_escape_string($db, $_POST['f_senha']);
$senhaconf = mysqli_real_escape_string($db, $_POST['f_senhaconf']);

//validação
if(empty($username)) array_push($errors, "nome de usuario obrigatório");
if(empty($email)) array_push($errors, "email obrigatório");
if(empty($senha)) array_push($errors, "senha obrigatória");
if(empty($senhaconf)) array_push($errors, "confirmação de senha obrigatória");
if($senha != $senhaconf)array_push($errors, "senhas não são iguais");

//checando se o nome do usuário ou email já existem
$user_check_query = "SELECT * FROM user WHERE username ='$username' OR email = '$email' LIMIT 1";
$resultado = mysqli_query($db, $user_check_query);
$user = msqli_fetch_assoc($resultado);
if($user){
    if($user['f_username'] === $username){array_push($errors, "nome de usuário já existente ");}
    if($user['f_email'] === $email){array_push($errors, "email já registrado ");}
}

//registrando usuário se passar sem erros
if(count($errors) == 0){
    $senhae = md5($senha); //encriptando a senha
    $query = "INSERT INTO user (username, email, senha)VALUES('$username', '$email, '$senhae')";
}
mysqli_query($db, $query);
$_SESSION['username'] = $username;
$_SESSION['sucesso'] = "você completou seu login";

ul('location: index.html');*/
?>