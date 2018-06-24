
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
                <div class="col-md-4">
                    <h1><a href="registra_troca_view.html">Cadastrar</a></h1>
                </div>
        </div>

        <div class="container">
            <h1>Trocas cadastradas</h1>
            <div class="col-md-4">
                <form>
                    <?php include'read_troca.php'?>
                    <table class="table table-striped table-hover table-bordered">
            			<caption>Trocas</caption>
            			<thead>
            				<tr>
            					<th>ID</th>
            					<th>De</th>
            					<th>Para</th>
                                <th>Fig</th>
            				</tr>
            			</thead>
            			<tbody>
            				<?php if ($query == FALSE): ?>
            					<tr><td colspan="2">Nenhuma troca encontrada</td></tr>
            				<?php else: ?>
            					<?php foreach ($query as $row): ?>
            						<tr>
            							<td><?= $row['ID'] ?></td>
            							<td><?= $row['De'] ?></td>
            							<td><?= $row['Para'] ?></td>
                                        <td><?= $row['Fig'] ?></td>
                                        <td class="text-left">
                                            <li><a href="<?="deleta_troca.php?ID={$row['ID']}"?>">[Excluir]</a></li>
                                        </td>
            						</tr>
            					<?php endforeach; ?>
            				<?php endif; ?>
            			</tbody>
            		</table>
                </form>
            </div>
        </div>
</html>
