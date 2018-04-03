<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID");

$login = htmlentities("joão da silva");
$senha = "123.";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$rs = $stmt->execute();

if($rs){
    echo "Atualizado";
}
else{
    echo "Erro";
}




?>