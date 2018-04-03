<?php




try {
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
    $id = 2;

    $stmt->bindParam(":ID", $id);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $rs = $stmt->execute();

    if($rs){
        echo "DELETADO";
    }
} catch(PDOException $e) {
    echo "Erro:  " . $e->getMessage();
}







?>