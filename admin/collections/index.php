<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    $collections = $mysqli->query(
        "SELECT collections.*, count(links.collection_id) as links_count 
        FROM collections 
        LEFT JOIN links 
        ON (collections.id = links.collection_id)
        GROUP by collections.id
        ORDER BY collections.name"
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
    
    <title>Coleções</title>
</head>
<body>
    <?php include_once '../../resources/views/layouts/navigation/auth.php'; ?>

    <div class="ui container">
        <h1 class="ui header">
            <a href="./create.php" class="ui right floated primary button">Novo</a>
            Coleções
        </h1>

        <table class="ui fluid table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>N. Links</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($collections as $collection) {
                    $id = $collection['id'];    
                    $name = $collection['name'];
                    $links_count = $collection['links_count'];
                ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td><?= $links_count ?></td>
                        <td>
                            <div class="ui compact icon buttons">
                                <a href="./edit.php?id=<?= $id ?>" class="ui basic tiny button">
                                    <i class="blue pencil icon"></i>
                                </a>

                                <form action="./delete" method="post" id="delete-form-<?= $id ?>" style="display: none">
                                    <input type="hidden" name="id" value="<?= $id ?>">
                                </form>

                                <button class="ui basic tiny button" 
                                    onclick="
                                        if (confirm('Deseja realmente deletar esse recurso?')) {
                                            document.getElementById('delete-form-<?= $id ?>').submit()
                                        }"
                                >
                                    <i class="red trash icon"></i>
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