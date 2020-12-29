<?php

require_once("config.php");


// //carrega um usuario
// $root = new Usuario();
// $root->loadById(22);
// echo $root;


// // carrega uma lista de usuarios

// $lista = Usuario::getList();

// echo json_encode($lista); 

////carrega uma lista de usuarios buscando pelo login

// $search = Usuario::search("s");

// echo json_encode($search);


////carrega um usuario usando login e senha
// $usuario = new Usuario();
// $usuario->login("lucas", "osososos");

// echo $usuario;


/////////////////criando um novo usuario
// $aluno = new Usuario();

// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("qwert");

// $aluno->insert();

// echo $aluno;

$usuario = new Usuario();

$usuario->loadById(23);

$usuario->update("professor","senha");

echo $usuario;


?>