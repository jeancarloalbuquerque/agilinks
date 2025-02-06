<?php
    if (empty(session_id())) {
        session_start();
    }

    $user = $_SESSION['user'];

?>

<header style="margin-bottom: 8rem;">
    <div class="ui container">
        <div class="ui secondary menu">
            <a href="/" class="header item">
                <i class="sitemap icon"></i>
                Agilinks

            </a>

            <a href="#" class="item">
                <i class="chart bar icon"></i>
                Analytics
            </a>
            <a href="/admin/links" class="item">
                <i class="linkify icon"></i>
                Links
            </a>
            <a href="/admin/collections" class="item">
                <i class="bookmark icon"></i>
                Coleções
            </a>
            
            <div class="right floated menu">
                <div class="ui dropdown item">
                    <div class="ui avatar">
                        <i class="user circle icon"></i>
                        <span><?= $user['name'] ?></span>
                    </div>

                    <i class="dropdown icon"></i>

                    <div class="menu">
                        <div class="header">
                            <i class="envelope icon"></i>
                            <span><?= $user['email'] ?></span>
                        </div>    
                            
                        <div class="header">
                            <i class="linkify icon"></i>
                            <span><?= $user['username'] ?></span>
                        </div>

                        <div class="divider"></div>

                        <a href="" class="item">
                            <i class="user circle icon"></i>
                            Perfil
                        </a>

                        <a href="/users" class="item">
                            <i class="eye icon"></i>
                            Pré visualizar
                        </a>

                        <a href="/auth/logout.php" class="red item">
                            <i class="red sign out icon"></i>
                            <span class="ui red text">Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.ui.dropdown').dropdown();
    </script>
</header>
