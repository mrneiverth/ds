<html lang="pt-br">
    <head>

        <title>Tinderinhas - Inicializar Coleção</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
        <link rel="stylesheet" href="style.css">
        
		<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

        <style>
        .demo-card-square.mdl-card {
          width: 480px;
          height: 160px;
          margin: 10px;
        }
        .demo-card-square > .mdl-card__title {
          color: #0000;
        }
        </style>

        <?php
	        ini_set('display_errors', 'On');

            require_once 'VerificadorSessao.class.php';
            require_once 'UsuarioCadastrado.class.php';
            require_once 'Colecao.class.php';
            require_once 'db.class.php';

            session_start();
            VerificadorSessao::verificarSessao();
            $user = $_SESSION['usuario_ativo'];

        ?>
    </head>
    
    <body>
        <h1><?php  ?></h1>
        
        <div class="demo-card-square mdl-card mdl-shadow--4dp">
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    <?php echo $user->getNome(); ?>
                </a>
            </div>  
            <div class="mdl-card__supporting-text">
                <?php echo $user->getColecao()->getEstatisticas(); ?><br>
                
            </div>
            
        </div>
        <div>
            <div
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/configuracoes.php';">
                    Configurações
                </button>
            </div>
            <div
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/logout.script.php';">
                    Logout
                </button>
            </div>
        </div>
        <div
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/meualbum.php';">
                Meu Album
            </button>
        </div>
        <div
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/repetidas.php';">
                Minhas Repetidas
            </button>
        </div>
        <div
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/index.html';">
                Minhas Trocas
            </button>
        </div>
    </body>

</html>