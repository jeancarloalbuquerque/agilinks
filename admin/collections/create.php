<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    if (!empty($_POST)) {
        $name = $_POST['name'];

        $query = "INSERT INTO collections (name) VALUES ('$name')";

        if ($mysqli->query($query)) {
            header('Location: ./index.php');
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
        <h1 class="ui header">Criar nova Coleção</h1>

        <form action="./create.php" method="post" class="ui form">
            <div class="field">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name">
            </div>

            <button type="submit" class="ui right floated primary button">Salvar</button>
        </form>
    </div>
</body>
</html>