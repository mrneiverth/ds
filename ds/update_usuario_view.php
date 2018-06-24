<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Troque figs</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
    <body>
		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                	    <span class="sr-only">Toggle navigation</span>
                	    <span class="icon-bar"></span>
                	    <span class="icon-bar"></span>
                	    <span class="icon-bar"></span>
            	    </button>
            	    <img src="imagens/" />
	            </div>
	            <div id="navbar" class="navbar-collapse collapse">
    	            <ul class="nav navbar-nav navbar-right">
    	                <li><a href="index.php">Voltar para Home</a></li>
    	            </ul>
	            </div>
	        </div>
	    </nav>

        <div class="container">
            <h1>Atualizar Usuário</h1>
            <div class="col-md-4"></div>
	    	<div class="col-md-4">
				<form method="post" action="update_usuario.php" id="formUpdateUser">
					<input type="hidden" name="cpf" value="<?php echo $_GET['cpf'];?>">
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="Senha" required="requiored">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nome" required="requiored">
					</div>
                    <div class="form-group">
						<input type="text" class="form-control" id="qtt" name="qtt" placeholder="Quantidade" required="requiored">
					</div>

                    <div class="form-group">
						<input type="text" class="form-control" id="itc" name="itc" placeholder="Iner Classe" required="requiored">
					</div>
					<button type="submit" class="btn btn-primary form-control">Atualizar</button>
				</form>
			</div>
			<div class="col-md-4"></div>
			<div class="clearfix"></div>
			<br/>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
