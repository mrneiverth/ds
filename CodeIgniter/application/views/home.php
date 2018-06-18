<div class="container">
	<div class="page-header">
        <meta charset="UTF-8">
        <h1>TINDER DE FIGURINHAS 6666</h1>
	</div>

	<?php if ($this->session->flashdata('error') == TRUE): ?>
		<div class="alert alert-warning"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('success') == TRUE): ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
	<?php endif; ?>

    <div>
        <h2>Figurinha</h2>
        <ol>
            <li> <a href="fig/create.html"> Inserir figurinha </a></li>
            <li> <a href="fig/read.html"> Listar figurinhas </a></li>
            <li> <a href="fig/update.html"> Atualizar figurinha </a></li>
            <li> <a href="fig/delete.html"> Remover figurinha </a></li>
        </ol>
    </div>

    <div>
        <h3>Usuario</h3>
        <ol>
            <li> <a href="application/views/user/criarUsuario.php"> Inserir Usuario </a></li>
            <li> <a href="application/views/user/listarUsuarios.php"> Listar Usuarios </a></li>
            <li> <a href="application/views/user/atualizarUsuario.php"> Atualizar Usuario </a></li>
            <li> <a href="application/views/user/removerUsuario.php"> Remover Usuario </a></li>
            <li> <a href="application/views/user/mostrarColecao.php"> Mostrar Colecao </a></li>
        </ol>
    </div>
</div>
