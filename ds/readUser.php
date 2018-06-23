<?php

    require_once('db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM usuario";
    $query = mysqli_query($link, $sql);

    if(!$query){
        die ('SQL Error: ' . mysqli_error($conn));
    }
    /*if ($data->num_rows > 0){
        while($row = $data->fetch_assoc()){
            echo "CPF: " . $row["CPF"]. " - Nome: " . $row["Nome"]. " - Senha: " . $row["Senha"]. " - Inter Classe: " . $row["Inter_Classe"]. " - Qtt: " . $row["Qtt"]. "<br>";
        }
    }else{
        echo "Nenhum resultado";
    }*/

?>
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
            <h1>Usuários cadastrados</h1>

            <form method="post" action="readUsuario.php">
                <table class="table table-striped table-hover table-bordered">
        			<caption>Usuários</caption>
        			<thead>
        				<tr>
        					<th>CPF</th>
        					<th>Nome</th>
        					<th>Senha</th>
                            <th>Inter Classe</th>
                            <th>Quantidade</th>
                            <th>Opções</th>
        				</tr>
        			</thead>
        			<tbody>
        				<?php if ($query == FALSE): ?>
        					<tr><td colspan="2">Nenhum usuário encontrado</td></tr>
        				<?php else: ?>
        					<?php foreach ($query as $row): ?>
        						<tr>
        							<td><?= $row['CPF'] ?></td>
        							<td><?= $row['Nome'] ?></td>
        							<td><?= $row['Senha'] ?></td>
                                    <td><?= $row['Inter_Classe'] ?></td>
                                    <td><?= $row['Qtt'] ?></td>
                                    <td class="text-left">
                                        <li><a href="updateUser.php">[Editar]</a></li>
                                        <li><a href="deleteUser.php">[Excluir]</a></li>
                                    </td>
        						</tr>
        					<?php endforeach; ?>
        				<?php endif; ?>
        			</tbody>
        		</table>
            </form>
        </div>
</html>
