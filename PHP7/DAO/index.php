<?php

require_once("config.php");


// Select
// $sql = new Sql();
// $select = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($select);
// var_dump($select);

// Listagem por ID
$usuario = new Usuario();
$usuario->loadById(1);

echo $usuario;


?>