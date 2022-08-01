<?php

require_once("config.php");

//carrega um usuario
//$joao = new Usuario();
//$joao->loadById(3);
//echo $joao;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("rc");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("bruno","12345");
//echo $usuario;

//criando um novo usuario
//$aluno = new Usuario("teste", "456123");
//$aluno->insert();
//echo $aluno;

//alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("testado123", "987654321");
//echo $usuario;

//deletar um usuario
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->delete();

echo $usuario;




?>