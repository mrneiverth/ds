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
    
    <body>
    	<div id="inicializar">
    		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/inicializar.html';">
  				Inicializar Coleção
			  </button>
    	</div>

      <div id="vazia">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" onclick="window.location='/ds/v2/index.html';">
          Começar com Coleção Vazia
        </button>
      </div>
    </body>
</html>