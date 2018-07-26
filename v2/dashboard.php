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
          width: 720px;
          height: 200px;
          margin: 10px
        }
        .demo-card-square > .mdl-card__title {
          color: #0000;
          background:
        }
        </style>

        <?php
            require_once 'db.class.php';

            session_start();
            if ((!(isset($_SESSION['cpf'])) == true) and (!(isset($_SESSION['senha'])) == true)){
                unset ($_SESSION['cpf']);
                unset ($_SESSION['senha']);
                header('Location:/ds/v2/index.html');
                exit;
            }
            $cpf = $_SESSION['cpf'];

            $objDb = new db();
            $link = $objDb->conecta_mysql();
            $sql = "SELECT * FROM usuario WHERE cpf='$cpf'";
            $result = mysqli_query($link, $sql) or die(mysqli_error());

            $row = mysqli_fetch_assoc($result);
        ?>
    </head>
    
    <body>
        
        <div class="demo-card-square mdl-card mdl-shadow--4dp">
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    
                </a>
            </div>  
            <div class="mdl-card__supporting-text">
                <?php echo $row['nome']; ?>
            </div>
            <div
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Configurações
                </button>
            </div>
            <div
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Logout
                </button>
            </div>
        </div>
        <div
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Meu Album
            </button>
        </div>
        <div
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Minhas Repetidas
            </button>
        </div>
        <div
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Minhas Trocas
            </button>
        </div>
    </body>

</html>