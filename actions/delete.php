<?php

require_once('../database/config.php');

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare('DELETE FROM tarefa WHERE id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    header('Location:../index.php');
    exit;
}
else {
    header('Location:../index.php');
    exit;
}
