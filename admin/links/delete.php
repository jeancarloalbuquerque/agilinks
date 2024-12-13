<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $mysqli->query("DELETE FROM links WHERE id = '$id'");
    }
    
    header('Location: ./index.php');
?>