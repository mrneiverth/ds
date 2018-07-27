<html lang="pt-br">
    <head>

        <title>Tinderinhas - Inicializar Coleção</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
        <link rel="stylesheet" href="style.css">
        
		<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

        <style>
         html, body {
            width: 100%;
            height: auto;
        }
        .demo-card-square > .mdl-card__title {
          color: #0000;
        }
        

        #upper_part {
            width: 100%;
            height: auto;
        
        }

        .demo-card-square.mdl-card{
          width: 80%;
          height: 160px;
          margin: 10px;
          border: 2px solid red;
          float: left;

        }
    
        #small_buttons {
            float: left;
            height: 120px;

            width: 5%;
         
        }

        #logout{
            margin-top: 4px;    
        }

        #voltar {
             margin-left: 4px;
             margin-top: 4px;
        }

        #big_buttons{
            width: 100%;

        }
        #album{
            width: 50%;
            margin-top: 4px;
        }
        #repetidas{
            width: 50%;
            margin-top: 4px;
        }
        #trocas{
            width: 50%;
            margin-top: 4px;
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
        <div id="voltar">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" onclick="history.go(-1);">
                <i class="material-icons">keyboard_arrow_left</i>
            </button>
        </div>
        <br>

        <div id="upper_part">


            <div id ="user">
                <div class="demo-card-square mdl-card mdl-shadow--4dp ">
                    <div class="mdl-card__actions mdl-card--border ">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                            <?php echo $user->getNome(); ?>
                        </a>
                    </div>  
                    <div class="mdl-card__supporting-text">
                        <?php echo $user->getColecao()->getEstatisticas(); ?><br>
                        
                    </div>
                    
                </div>
            </div>

            <div id="small_buttons">

                <div>
                    <div
                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" onclick="window.location='/ds/v2/configuracoes.php';" id = "config">
                            <i class="material-icons">build</i>
                        </button>
                    </div>
                    <div
                        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" onclick="window.location='/ds/v2/logout.script.php';" id = "logout">
                            <i class="material-icons">cancel</i>
                        </button>
                    </div>
                </div>
            </div>

        </div> 

        <div id="big_buttons"  align="center">
            <div
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/meualbum.php';" id = "album" align="">
                    <big>Meu Album</big>
                </button>
            </div>
            <div
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/repetidas.php';" id = "repetidas">
                    <big>Minhas Repetidas</big>
                </button>
            </div>
            <div
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/index.html';" id = "trocas">
                    <big>Minhas Trocas</big>
                </button>
            </div>
        </div>
        

    </body>

</html>