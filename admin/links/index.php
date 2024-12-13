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
                    <th>Tags</th>
                    <th>Descrição</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($links as $link) {
                        $id = $link['id'];
                        $title = $link['title'];
                        $description = $link['description'];
                        $url = $link['url'];
                        $link_tags = (array) array_rand($tags);


                        echo
                        "<tr>
                            <td>$id</td>
                            <td>$title</td>
                            
                            <td>";
                                foreach ($link_tags as $tag) {
                                    echo "<span class='ui label'>$tags[$tag]</span>";
                                }
                            echo
                            "</td>
                            <td>$description</td>
                            <td>
                                <div class='ui icon buttons'>
                                    <a href='' class='ui basic tiny button'>
                                        <i class='blue pencil icon'></i>
                                    </a>
                                    <a href='' class='ui basic tiny button'>
                                        <i class='red trash icon'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>

    </div>
</body>
</html>