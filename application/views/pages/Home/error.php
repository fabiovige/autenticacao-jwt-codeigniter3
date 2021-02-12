<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<h1 class="text-center my-5">DCD - Diário de Classe Digital</h1>

			<div class="card">
				<div class="card-header">
					Olá, <?php echo $this->session->userdata('nome') ?>
				</div>
				<div class="card-body text-center">
					<h4 class="my-5"><?php echo $msg ?></h4>
					<a class="btn btn-info btn-block" title="Voltar a tela de login" href="<?php echo base_url('sessions/sair')?>">Voltar à tela de login</a>
				</div>
				<div class="card-footer">
					<p class="text-center samll jumbotron-0">DCD - Diário de Classe Digital</p>
				</div>
			</div>
		</div>
	</div>


</div>
