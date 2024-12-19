<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    if (!empty($_POST)) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $url = $_POST['url'];

        $query = $mysqli->query("UPDATE links set title = '$title', description = '$description', url = '$url' WHERE id = $id");

        header('Location: ./');
    }

?>