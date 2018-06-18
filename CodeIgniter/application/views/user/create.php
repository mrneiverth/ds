<div class="container">
	<div class="page-header">
        <meta charset="UTF-8">
        <h1>TINDER DE FIGURINHAS</h1>
	</div>

    <?php if ($this->session->flashdata('error') == TRUE): ?>
		<div class="alert alert-warning"><?php echo $this->session->flashdata('error'); ?></div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('success') == TRUE): ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
	<?php endif; ?>

    <form method="post" action="<?=base_url('criarUsuario')?>" enctype="multipart/form-data">
        <h2>Inserir Usuario</h2>

        <div class="col-md-4">
            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="CPF" class="form-control" value="<?=set_value('CPF')?>" required/>
            </div>
        </div>

        <div class="col-md-4">
			<div class="form-group">
                <label>Senha</label><br>
                <input type="password" name="Senha" class="form-control" value="<?=set_value('Senha')?>" required/>
            </div>
        </div>

        <div class="col-md-4">
			<div class="form-group">
                <label>Nome</label><br>
                <input type="text" name="Nome" class="form-control" value="<?=set_value('Nome')?>" required/>
            </div>
        </div>

        <div class="col-md-4">
			<input type="submit" value="Enviar" class="btn btn-success" />
		</div>

    </form>
</div>
