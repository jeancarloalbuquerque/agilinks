<?php
    require_once '../vendor/autoload.php'; 
    require_once '../database/connection.php';

    $links = $mysqli->query('select * from links');
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
    <?php include_once '../resources/views/layouts/navigation.php' ?>

    <div class="ui text container">
        <div class="ui divided link items">
            <?php 
                

                foreach ($links as $link) {
                    echo 
                    "<div href='#' class='item'>
                        <div class='middle aligned content'>
                            <a href='". $link['url'] ."' class='header'>". $link['title']. "</a>
                            <div class='description'>
                                <p>". $link['description'] ."</p>
                            </div>
                        </div>
                    </div>";
                }
            ?>
        </div>
    </div>
</body>
</html>