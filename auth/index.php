<?php
    require_once '../vendor/autoload.php'; 
    require_once '../database/connection.php';

    session_start();

    if (isset($_SESSION['user'])) {
        return header('Location: ../../admin');
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.3/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.3/dist/semantic.min.js"></script>

    <title>Login</title>
</head>
<body>
    <?php include_once '../resources/views/layouts/navigation/guest.php' ?>

    <div class="ui container">
        <div class="ui center aligned grid">
            <div class="six wide column">
                <div class="ui blue segment">
                    <h2 class="ui header">Login</h2>

                    <form class="ui form" action="./login.php" method="POST">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="email" name="email">
                            </div>
                        </div>

                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password">
                            </div>
                        </div>

                        <div class="field">
                            <div class="ui checkbox">
                                <label for="remember">Manter conectado</label>
                                <input type="checkbox" name="remember" id="remember">
                            </div>
                        </div>

                        <button class="ui primary fluid button">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.ui.checkbox').checkbox();
    </script>
</body>
</html>