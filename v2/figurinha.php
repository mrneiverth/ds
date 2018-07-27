<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Tinderinhas - Home</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
    		<link rel="stylesheet" href="style.css">
    		<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    </head>
    
    <body>
      <!-- Square card -->
      <style>
      .demo-card-square.mdl-card {
        width: 320px;
        height: 480px;

      }
      .demo-card-square > .mdl-card__title {
        color: #fff;
        background-image: url('http://54.94.241.129/canarinho/canarinho1.png');

      }

      #cadastro {
        margin-top: 4px;
      }

      #masterdiv {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-height: 100vh;
        margin-top: -88px;
        
      }
      </style>
        <div id="masterdiv" >
            <div class="demo-card-square mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" align = "center"> 
                    </div>
                </div>
                <h2 class="mdl-card__title-text">informações da figurinha vão aqui blablablablblaauhsdhasiudaidn ias uiasdua dansd ainds and asdn asn adunad nai nan ansd </h2>

                <div class="mdl-card__supporting-text">

                    <div class="mdl-card__actions mdl-card--border">

                        <div id="login" align="center">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent form-control" type="submit">
                            Login
                        </button>
                        </div>

                        <div id="cadastro" align="center">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/cadastro.html';">
                            Novo Usuário? Cadastre-se!
                        </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </body>
</html>