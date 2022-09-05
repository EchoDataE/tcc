<?php
session_start();
//iniciando vaiaveis

$username ="";
$email ="";

$errors = array();

//conectar bd
//'host', 'username', 'senha', 'bd'
$db = mysqli_connect('localhost', 'root', '', 'bancadorock1') or die("não conectou");

//user
$nomep = mysqli_real_escape_string($db, $POST['f_prodnome']);
$precop = mysqli_real_escape_string($db, $POST['f_prodpreco']);
$descp = mysqli_real_escape_string($db, $POST['f_proddesc']);

//validação
if(empty($nomep)) {array_push($errors, "nome de produto obrigatório")};
if(empty($precop)) {array_push($errors, "preço obrigatório")};
if(empty($descp)) {array_push($errors, "descrição obrigatória")};

//checando se o nome do usuário ou email já existem
$prod_check_query = "SELECT * FROM produtos WHERE nome ='$nomep' LIMIT 1";
$resultado = msquli_query($db, $prod_check_query);
$produtos = msqli_fetch_assoc($resultado);
if($produtos){
    if($produtos['f_prodnome'] === $nomep){array_push($errors, "nome de produto já existente ");}
}

//registrando usuário se passar sem erros
if(count($errors) == 0){
    $query = "INSERT INTO produtos (nome, preço, descricao)VALUES('$nomep', '$precop, '$descp')";
}
mysqli_query($db, $query);

ul('location: index.html');
?>