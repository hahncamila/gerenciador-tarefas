<?php

require_once('database/config.php');

$tarefas = [];

$sql = $pdo->query("SELECT * FROM tarefa ORDER BY id ASC");

if ($sql->rowCount() > 0){
    $tarefas = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/924002393b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Lista de tarefas</title>
</head>
<body>

    <div id="lista-tarefas">

        <h1>Minhas tarefas</h1>

        <form action="actions/create.php" method="post" class="tarefas-form">
            <input type="text" name="description" placeholder="Digite sua tarefa aqui:" required>
            <button type="submit" class="form-button"><i class="fa-regular fa-plus"></i></button>
        </form>

        <div id="tarefas">

            <?php foreach ($tarefas as $tarefa): ?>

                <div class="tarefa">

                    <p class="tarefa-descricao">
                        <?= $tarefa['description'] ?>
                    </p>

                    <div class="tarefa-acao">
                        <a class="action-button edit-button"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="actions/delete.php?id=<?= $tarefa ['id'] ?>" class="action-button delete-button"><i class="fa-regular fa-trash-can"></i></a>
                    </div>

                    <form action="actions/update.php" method="post" class="tarefas-form editar-tarefa hidden">
                        <input type="text" class="hidden" name="id" value="<?= $tarefa['id']?>"> 
                        <input type="text" name="description" placeholder="Edite sua tarefa aqui" value="<?= $tarefa['description']?>">
                        <button type="submit" class="form-button confirm-button"><i class="fa-solid fa-check"></i></button>
                    </form>

                </div>

            <?php endforeach ?>

        </div>

    </div>

    <script src="script.js"></script>

</body>
</html>