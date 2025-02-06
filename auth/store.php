<?php
    include '../vendor/autoload.php';
    include '../database/connection.php';

    function back() 
    {
        return header('Location: ./register.php');
    }

    function filled() 
    {
        $fields = [
            'name',
            'username',
            'email',
            'password',
            'password_confirmation'
        ];
    
        foreach ($fields as $field) {
            if (empty($_POST[$field])) {
                return false;
            }
        }

        return true;
    }

    if (!filled()) {
        return back();
    }

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];
    
    if ($password != $password_confirmation) {
        return back();
    }

    $insert = $mysqli->query(
        "INSERT INTO users(name, username, email, password) 
        VALUES('$name', '$username', '$email', '$password')"
    );

    if (!$insert) {
        return back();
    }

    return header('Location: /auth');
?>