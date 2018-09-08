<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuario
/*$usuario = new Usuario();
$usuario->loadById(6);
echo $usuario;
*/

//Carrega uma lista de usuarios

/*$lista = Usuario::getList();
echo json_encode($lista);

*/

//Carrega uma lista de usuários buscando pelo login

/*$search = Usuario::search("us");
echo json_encode($search);
*/

//Carrega um usuario usando login e senha

$usuario = new Usuario();
$usuario->login("mateus","12345");

echo $usuario;
?>