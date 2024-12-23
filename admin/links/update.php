<?php
    include_once '../../vendor/autoload.php';
    include_once '../../database/connection.php';

    if (isset($_POST)) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $collection = !empty($_POST['collection']) ? $_POST['collection'] : 'null'; 

        $query = "UPDATE links SET title = '$title', description = '$description', url = '$url', collection_id = $collection WHERE id = $id";

        if ($mysqli->query($query)) {
            header('Location: ./index.php');
        }
    }
?>