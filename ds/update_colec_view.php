<!DOCTYPE HTML>
<html lang="pt-br">
	<?php
		$cpf_user = $_GET['cpf'];
		//echo $cpf_user; 
	?>

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
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Alterar coleção!</h3>
	    		<br />
				<form method="post" action="update_colec.php" id="formColec">
					<div class="form-group">
						<input type="number" min="0" max = "681" class="form-control" id="numero" name="numero" placeholder="numero" required="requiored">
					</div>

					<div class="form-group">
						<input type="number" min="0" class="form-control" id="quantidade" name="quantidade" placeholder="quantidade" required="requiored">
					</div>

					<div class="form-group">
						<input type="hidden" name="cpf" value="<?php echo $cpf_user; ?>">
					</div>

					<button type="submit" class="btn btn-primary form-control">Atualizar</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
