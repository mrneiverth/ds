<html lang="pt-br">
    <head>
        <title>Tinderinhas - Inicializar Coleção</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
		    <link rel="stylesheet" href="style.css">
		    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

        <?php
          require_once 'VerificadorSessao.class.php';
          
          session_start();
          
          VerificadorSessao::verificarSessao();
        ?>

    </head>
    
    <style rel="stylesheet" type="text/css">
    
    html, body{
      height: 100%;
    }
    .mdl-button{
      margin-top: 100px;
      height: 150px;
      width: 50%;
    }
    #empty{
      margin-top: 50px;     
    }
    </style>


    <body>
    	<div id="inicializar" align="center">
    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/index.html';">
  				<h4>Inicializar Coleção</h4>
			  </button>
    	</div>

      <div id="vazia" align = "center">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/index.html';" id="empty">
          <h4>Começar com Coleção Vazia</h4>
        </button>
      </div>
    </body>
</html>