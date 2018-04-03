<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :SENHA)");

$login = "ernane";
$senha = "123";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$rs = $stmt->execute();

if($rs){
    echo "Inserido";
}
else{
    echo "Erro";
}




?>