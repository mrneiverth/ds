<!DOCTYPE html>
<html lang="pt-br">

<style rel="stylesheet" type="text/css">
#login {
 margin-top: 16px;
}

#voltar {
 margin-left: 4px;
 margin-top: 4px;
}



</style>


    <head>
        <title>Tinderinhas - Cadastro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css"/> 
		    <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    </head>

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

    <body>
      <div id="voltar">
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" onclick="window.location='/ds/v2/index.html';">
          <i class="material-icons">keyboard_arrow_left</i>
        </button>
      </div>

    	<div id="form" align="center">
      		<form method="POST" action="altera_usuario.script.php" id="form_cadastro">

            <div>
              <strong>
                Criar uma nova conta
              </strong>
            </div>
            <div id="fields1" align="center">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input id="email" name="email" class="mdl-textfield__input" type="text">
                <label class="mdl-textfield__label" for="email">E-Mail</label>
              </div>
            </div>

            <div id="fields3" align="center">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input id="nome" name="nome" class="mdl-textfield__input" type="text ">
                <label class="mdl-textfield__label" for="nome">Nome</label>
              </div>
            

              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input id="cidade" name="cidade" class="mdl-textfield__input" type="text ">
                <label class="mdl-textfield__label" for="cidade">Cidade</label>
              </div>
            </div>

    				<div id="login">
    					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent form-control" type="submit" id="finalizar">
    						Alterar Dados 
  					  </button>
  				  </div>
			   </form>
    	</div>
    </body>
</html>