<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $collection = $mysqli->query("SELECT * FROM collections WHERE id = '$id'")->fetch_assoc();
    }

    if (!isset($collection)) {
        header('Location: ./index.php');
    }

    $name = $collection['name'];
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

        <form action="./update.php" method="post" class="ui form">
            <input type="hidden" name="id" value="<?= $id ?>">    

            <div class="field">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" value="<?= $name ?>">
            </div>

            <button type="submit" class="ui right floated primary button">Salvar</button>
        </form>
    </div>
</body>
</html>