<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Troca de Figs</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script>
			// código javascript
		</script>
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
			            <li><a href="usuario.html">Inscrever-se</a></li>
			            <li class="">
			            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
							<ul class="dropdown-menu" aria-labelledby="entrar">
								<div class="col-md-12">
						    		<p>Você possui uma conta?</h3>
						    		<br />
									<form method="post" action="" id="formLogin">
										<div class="form-group">
											<input type="text" class="form-control" id="campo_cpf" name="cpf" placeholder="CPF" />
										</div>
										<div class="form-group">
											<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
										</div>
										<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
										<br/><br/>
									</form>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</div>
	    </nav>


	    <div class="container">

		    <!-- Main component for a primary marketing message or call to action -->
		    <div class="jumbotron">
		    	<h1 align="center">Bem vindo ao sistema de trocas de figurinhas!</h1>
		    </div>
			<div class="col-md-4">
				<form method="get" action="figurinha.html" id="showFigs">
					<div class="form-group">
						<button type="submit" class="btn btn-primary form-control">Figurinhas</button>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<form method="get" action="troca.html" id="showTrocas">
					<div class="form-group">
						<button type="submit" class="btn btn-primary form-control">Trocas</button>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<form method="get" action="read_usuario_view.php" id="showUsers">
					<div class="form-group">
						<button type="submit" class="btn btn-primary form-control">Usuarios</button>
					</div>
				</form>
			</div>

		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
