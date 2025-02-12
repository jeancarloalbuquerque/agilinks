<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    session_start();

    $user_id = $_SESSION['user']['id'];

    $links = $mysqli->query(
        "SELECT links.*, collections.name as collection_name  FROM links 
        LEFT JOIN collections ON links.collection_id = collections.id
        WHERE links.user_id = $user_id"
    );
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.3/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.3/dist/semantic.min.js"></script>

    <title>Meus Links</title>
</head>
<body>
    <?php include_once '../../resources/views/layouts/navigation/auth.php' ?>

    <div class="ui container">

        <h1 class="ui header">
            <a href="./create.php" class="ui right floated primary button">Novo</a>
            Gerenciar Meus Links
        </h1>

        <table class="ui table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Coleção</th>
                    <th>Descrição</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                
                <?php foreach ($links as $link) {
                    $id = $link['id'];
                    $title = $link['title'];
                    $description = $link['description'];
                    $url = $link['url'];

                    $collection_id = $link['collection_id'];
                    $collection_name = $link['collection_name'];
                ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $title ?></td>
                        
                        <td><span class='ui basic <?= empty($collection_name) ? 'disabled' : 'primary' ?> label'><?= $collection_name ?? '<em>Nenhum</em>' ?></span></td>
                        <td><?= $description ?></td>
                        <td class="right aligned">
                            <div class='ui icon compact buttons'>
                                <a href='./edit.php?id=<?= $id ?>' class='ui basic tiny button'>
                                    <i class='blue pencil icon'></i>
                                </a>

                                <form action='./delete.php' method='post' id='delete-form-<?= $id ?>' style='display:none'>
                                    <input type='hidden' name='id' value='<?= $id ?>'>
                                </form>

                                <button onclick="
                                    if (confirm('Deseja realmente deletar esse recurso?')) {
                                        document.getElementById('delete-form-<?= $id ?>').submit()
                                    }" 
                                    class='ui basic tiny button'
                                >
                                    <i class='red trash icon'></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>
    
</body>
</html>