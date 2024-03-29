<?php

require_once('../database/config.php');

$description = filter_input(INPUT_POST, 'description');
$id = filter_input(INPUT_POST, 'id');

if($description && $id){
    $sql = $pdo->prepare("UPDATE tarefa SET description = :description WHERE id = :id");
    $sql->bindValue(':description', $description);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location:../index.php');
    exit;
}
else {
    header('Location:../index.php');
    exit;
}