<?php
    include_once '../../vendor/autoload.php';
    include_once '../../database/connection.php';

    if (!empty($_POST)) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];

        $query = "INSERT INTO links (title, description, url)
        VALUES ('$title', '$description', '$url')";

        if ($mysqli->query($query)) {
            header('Location: ./');
        } else {
            header('Location: ./create.php');
        }

    }
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

            <button type="submit" class="ui primary button">Salvar</button>
        </form>
    </div>

</body>
</html>