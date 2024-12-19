<?php
    require_once '../../vendor/autoload.php'; 
    require_once '../../database/connection.php';

    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $mysqli->query("DELETE FROM collections WHERE id = '$id'");
    }
    
    header('Location: ./index.php');
?>