<html lang="pt-br">
    <head>
        <title>Tinderinhas - Figurinha</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
		<link rel="stylesheet" href="style.css">
		<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<style> 
         .graybox {
            align-items: center;
         }
        </style>

        <script type="text/javascript">
        
         function increase(e, fig) {
             var element = document.getElementById(e);
             element.textContent = parseInt(element.textContent) + 1;
             document.getElementById('transfer_value').value = element.textContent;
                if (parseInt(element.textContent) > 0) {
                    var image = document.getElementById('image');
                    image.src = "http://54.94.241.129/firmino/firmino" + fig +".png";
                }
         }

         function decrease(e, fig, offset) {
            var element = document.getElementById(e);
            element.textContent = Math.max(parseInt(element.textContent) - 1, offset);
            document.getElementById('transfer_value').value = element.textContent;
                if (parseInt(element.textContent) < 1) {
                    var image = document.getElementById('image');
                    image.src = "http://54.94.241.129/canarinho/canarinho" + fig +".png";
                }
         }

         function setText(t) {
             var element = document.getElementById('value_fig');
             console.log(t);
             element.textContent = t;
         }

        </script>
    <body>

        <?php
            ini_set('display_errors', 'On');

            require_once 'VerificadorSessao.class.php';
            require_once 'UsuarioCadastrado.class.php';
            require_once 'db.class.php';

            session_start();
            VerificadorSessao::verificarSessao();
            $user = $_SESSION['usuario_ativo'];

            $id = $_GET['id'];

            $_SESSION['id'] = $id;
            
            if($user->temFigurinha($id)){
                $url = "http://54.94.241.129/firmino/firmino".$id.".png";
            }else $url = "http://54.94.241.129/canarinho/canarinho".$id.".png"; 

            $init = $user->getColecao()->getRepetidas()[$id] + $user->getColecao()->getAlbum()->getFigurinhas()[$id];
            $offset = $init == 0 ? 0 : 1;
            $_SESSION['init'] = $init;

        ?>
    
        <main class="mdl-layout__content"> 
            <div id="dvFigs" class = "mdl-grid">
                <div> 
                   <?php echo "<img src=".$url." id=\"image\">"; ?>
                   <?php echo "<button id=\"plus_fig\" class=\"mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect\" onclick=\"increase('value_fig', ".$id.")\"><id class=\"material-icons\">add</id></button>" ?>
               
                    <span id="value_fig" style name="value">  </span>
                    <?php echo "<script> setText('".$init."'); </script>"; ?>
            
                   <?php echo "<button id=\"minus_fig\" class=\"mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect\" onclick=\"decrease('value_fig', ".$id.", ". $offset .")\"><id class=\"material-icons\">remove</id></button>"?>              
                </div>    

                <form method="POST" action="atualizafigurinha.script.php"
                    <div>
                        <input id="transfer_value" name="transfer_value" hidden> </input>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                            Finalizar
                        </button>
                    </div>
                </form>
            </div>

            <div> 
                
            </div>
        </main>





    </body>

</html>