<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    session_start();

    if (!empty($_POST)) {
        $name = $_POST['name'];
        $user_id = $_SESSION['user']['id'];

        $query = "INSERT INTO collections (name, user_id) VALUES ('$name', $user_id)";

        if ($mysqli->query($query)) {
            header('Location: ./index.php');
        }
    }
?>
