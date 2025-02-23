<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.3/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.9.3/dist/semantic.min.js"></script>

    <title>Document</title>
</head>
<body>
    <?php include_once 'resources/views/layouts/navigation/guest.php' ?>
    
    <main>
        <div class="ui text container">

            <div class="ui center aligned basic segment">
                <h1>Ajude seus seguidores a descobrir tudo que você faz, com apenas um link</h1>
                <a href="./admin" class="ui primary huge button">Começar agora</a>
            </div>

            <div class="ui hidden section divider"></div>

            <div class="ui basic segment">
                <h2>
                    <span>Usado por mais de 50M de </span>
                    <div class="ui text shape" id="users-shape">
                        <div class="sides">
                            <div class="active side"><span class="ui primary text">Músicos</span></div>
                            <div class="side"><span class="ui primary text">Bandas</span></div>
                            <div class="side"><span class="ui primary text">Escritores</span></div>
                            <div class="side"><span class="ui primary text">Criadores</span></div>
                            <div class="side"><span class="ui primary text">Influenciadores</span></div>
                            <div class="side"><span class="ui primary text">Pequenos Negócios</span></div>
                            <div class="side"><span class="ui primary text">Atletas</span></div>
                            <div class="side"><span class="ui primary text">Streemers</span></div>
                            <div class="side"><span class="ui primary text">Vloogers</span></div>
                        </div>
                    </div>
                </h2>
            </div>

            <div class="ui section hidden divider"></div>

            <div class="ui basic segment">
                <h2>Você nunca mais vai precisar mudar o link da sua Bio!</h2>
                <p class="ui text">
                    Em 2024, a Agilinks resolveu o maior problema das redes sociais: ter apenas um link na sua bio.
                </p>
                <p class="ui text">
                    A Agilinks foi a primeira plataforma de <span class="ui blue text">link na bio</span> criada para resolver esse problema.
                    Desde então Agilinks se tornou muito mais. Permitindo empresas e criadores a conseguir muito mais das suas redes socias,
                    aumentando seus seguidores e devolvendo o controle de como seus conteúdos são descobertos.
                </p>
            </div>

        </div>
    </main>

    <script>
        function roll_shape() {
            $('.shape').shape('flip down');
        }

        window.setInterval(function() {
            roll_shape()
        }, 2500);
        
    </script>
</body>
</html>
