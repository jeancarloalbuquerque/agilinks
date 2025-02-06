<?php
    include_once '../../vendor/autoload.php';
    include_once '../../database/connection.php';

    session_start();

    $user_id = $_SESSION['user']['id'];

    $collections = $mysqli->query("SELECT * FROM collections WHERE user_id = $user_id ORDER BY name")
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.3/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.3/dist/semantic.min.js"></script>

    <title>Document</title>
</head>
<body>
    <?php include_once '../../resources/views/layouts/navigation/auth.php' ?>

    <div class="ui text container">
        <h1 class="ui header">
            Criar novo Link
        </h1>

        <form action="./store.php" class="ui form" method="post">
            <div class="field">
                <label for="title">Título</label>
                <input type="text" name="title" id="title">
            </div>

            <div class="field">
                <label for="description">Descrição</label>
                <textarea name="description" id="description"></textarea>
            </div>

            <div class="field">
                <label for="url">URL</label>
                <input type="url" name="url" id="url">
            </div>

            <div class="field">
                <label for="collection">Coleção</label>
                <div class="ui clearable selection dropdown">
                    <input type="hidden" name="collection">
                    <i class="dropdown icon"></i>
                    <div class="default text">Coleção</div>
                    <div class="menu">
                        <?php foreach ($collections as $collection) { 
                            $collection_id = $collection['id'];
                            $collection_name = $collection['name'];
                        ?>
                            <div class="item" data-value="<?= $collection_id ?>"><?= $collection_name ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <button type="submit" class="ui primary button">Salvar</button>
        </form>
    </div>

    <script>
        $('.dropdown').dropdown({clearable: true});
    </script>

</body>
</html>