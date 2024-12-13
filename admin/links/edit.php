<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $link = $mysqli->query("SELECT * FROM links WHERE id = '$id'")->fetch_assoc();
    }

    if (! isset($link)) {
        header('Location: ./index.php');
    }

    $id = $link['id'];
    $title = $link['title'];
    $description = $link['description'];
    $url = $link['url'];
?>

<!DOCTYPE html>
<html lang="en">
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

        <form action="./create.php" class="ui form" method="post">
            <div class="field">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" value="<?= $title ?>">
            </div>

            <div class="field">
                <label for="description">Descrição</label>
                <textarea name="description" id="description"><?= $description ?></textarea>
            </div>

            <div class="field">
                <label for="url">URL</label>
                <input type="url" name="url" id="url" value="<?= $url ?>">
            </div>

            <button type="submit" class="ui primary button">Salvar</button>
        </form>
    </div>

</body>
</html>