<?php
    include_once '../../vendor/autoload.php';
    include_once '../../database/connection.php';

    session_start();

    if (!empty($_POST)) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $collection = !empty($_POST['collection']) ? $_POST['collection'] : 'null';
        $user_id = $_SESSION['user']['id'];
        
        $query = "INSERT INTO links (title, description, url, collection_id, user_id) VALUES ('$title', '$description', '$url', $collection, $user_id)";

        if ($mysqli->query($query)) {
            header('Location: ./');
        } else {
            header('Location: ./create.php');
        }

    }
?>