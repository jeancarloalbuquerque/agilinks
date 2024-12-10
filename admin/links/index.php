<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    $links = $mysqli->query('select * from links');
    
    $tags = [
        'Redes Socias',
        'Portifólio',
        'Produtos',
        'Conteúdos',
    ];
?>

<!DOCTYPE html>
<html lang="en">
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

    <div class="ui text container">

        <h1 class="ui header">
            Meus Links
        </h1>

        <div class="ui divided relaxed link items">
            <?php                 
                foreach ($links as $link) {
                    echo 
                    "<div href='#' class='item'>
                        <div class='middle aligned content'>
                            <a href='". $link['url'] ."' class='header'><i class='linkify icon'></i>". $link['title']. "</a>
                            <div class='description'>
                                <p>". $link['description'] ."</p>
                            </div>
                            
                            <div class='extra'>";

                                $link_tags = (array) array_rand($tags);
                                
                                foreach ($link_tags as $tag) {
                                    echo "<span class='ui label'>$tags[$tag]</span>";
                                }
                            
                            echo
                            "</div>
                        </div>
                    </div>";
                }
            ?>
            

        </div>
    </div>
</body>
</html>