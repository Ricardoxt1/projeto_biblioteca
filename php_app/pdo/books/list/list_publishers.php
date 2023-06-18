<?php

include_once('../../config.php');
$pdo = conectar();

$tabela = 'publishers';

//busca de dados sobre as editoras

$id = 1;
$stmt = $pdo->prepare('SELECT * FROM ' . $tabela . ' WHERE id = :id');
$stmt->bindValue(':id', $id);
$stmt->execute();

$resultado = $stmt->fetchAll();


foreach ($resultado as $key) {
    print_r('Nome das editoras: ' . $key['name']);
    
}
