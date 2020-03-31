<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//===================
//Carrega um usuário
//===================
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//=============================
//Carrega uma lista de usuários
//=============================
//$lista = Usuario::getList();
//echo json_encode($lista);

//============================================================================
//Carrega uma lista de usuários buscando parcialmente ou totalmente pelo login
//============================================================================
//$search = Usuario::search("mar");
//echo json_encode($search);

//===========================================
//Carrega um usuário usando o login e a senha
//===========================================
$usuario = new Usuario();
$usuario->login("root", "1234567890");

echo $usuario;


?>