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
            require_once 'VerificadorSessao.class.php';
            require_once 'db.class.php';

            session_start();
            
            $cpf = $_SESSION['cpf'];

            $objDb = new db();
            $link = $objDb->conecta_mysql();
            $sql = "SELECT * FROM usuario WHERE cpf='$cpf'";

            $result = mysqli_query($link, $sql) or die(mysqli_error());

            $row = mysqli_fetch_row($result);

        ?>
    </head>
    
    <body>
        <h1><?php  ?></h1>
        
        <div class="demo-card-square mdl-card mdl-shadow--4dp">
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    <?php echo $row[3] ?>
                </a>
            </div>  
            <div class="mdl-card__supporting-text">
                XXX/682 Figurinhas <br>
                XX% do Album <br>
                XXX Repetidas <br>
                
            </div>
            
        </div>
        <div>
            <div
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/index.html';">
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
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/index.html';">
                Meu Album
            </button>
        </div>
        <div
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/index.html';">
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