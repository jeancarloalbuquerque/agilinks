<?php 
    include '../vendor/autoload.php';
    include '../database/connection.php';
    
    session_start();

    if (empty($_POST['email']) OR empty($_POST['password'])) {
        return header('Location: ./index.php');
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // ' OR 1 = 1 OR '
    $user = $mysqli->query(
        "SELECT * FROM users
        WHERE email = '$email' AND password = '$password'");
    
    if ($user->num_rows != 1) {
        return header('Location: ./index.php');
    }


    $_SESSION['user'] = $user->fetch_assoc();
    header('Location: ../admin');
?>