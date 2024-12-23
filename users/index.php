<?php
    require_once '../vendor/autoload.php'; 
    require_once '../database/connection.php';

    $collections = $mysqli->query('SELECT * FROM collections ORDER BY name')->fetch_all(MYSQLI_ASSOC);

    $links = $mysqli->query(
        'SELECT links.*, collections.name as collection_name  FROM links 
        LEFT JOIN collections ON links.collection_id = collections.id
        ORDER BY collections.name, title'
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

    <title>Document</title>
</head>
<body>
    <div class="ui text container">
        <div class="ui basic center aligned segment">
            <img class="ui small circular centered image" src="https://images.unsplash.com/photo-1734375119887-460f4b97dfaa?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="aspect-ratio:1; object-fit:cover">
            
            <h1 class="ui header">@Asperiores Provident</h1>

            <a class="ui circular twitter icon button"><i class="twitter icon"></i></a>
            <a class="ui circular pink icon button"><i class="instagram icon"></i></a>
            <a class="ui circular youtube icon button"><i class="youtube icon"></i></a>

        </div>

        <div class="ui basic center aligned segment">
            <div class="ui divided relaxed link items">
                <?php
                    $previous_collection_id = -1;
                    foreach ($links as $link) {
                ?>
                    <?php if ($link['collection_id'] != $previous_collection_id) {
                        $previous_collection_id = $link['collection_id']; ?>

                        <?php if (!empty($link['collection_name'])) { ?>
                            <div class="ui hidden section divider"></div>
                            <h1 class="ui header"><?= $link['collection_name'] ?></h1>
                        <?php } ?>
                        
                    <?php } ?>

                    <a href="<?= $link['url'] ?>" class="item">
                        <div class="content">
                            <div class="header"><?= $link['title'] ?></div>
                            <!-- <div class="description"><?= $link['description'] ?></div> -->
                        </div>
                    </a>
                
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>