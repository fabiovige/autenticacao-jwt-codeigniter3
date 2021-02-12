<nav class="navbar navbar-fixed-top navbar-expand-md navbar-dark bg-primary">

<div class="container">
		<div class="navbar-brand h1 mb-1" href="#!"><?php echo NAME_APP; ?></div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDiarioDeClasse">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarDiarioDeClasse">
			<ul class="navbar-nav mr-1 ml-0">
				<li class="nav-item">
					<a class="nav-link text-white" href="<?php echo base_url('home') ?>">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Frequência
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url('frequencia/consulta') ?>">Relatório</a>
						<a class="dropdown-item" href="<?php echo base_url('frequencia/gerenciamento') ?>">Gerenciamento</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('frequencia/home') ?>">Lançamento</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Atividade
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?php echo base_url('atividade/gerenciamento') ?>">Gerenciamento</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('atividade/home') ?>">Lançamento</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Nota
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												
						
						<a class="dropdown-item" href="<?php echo base_url('fechamento') ?>">Fechamento</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('nota') ?>">Lançamento</a>
					</div>
				</li>


				<!--<li class="nav-item dropdown">
					<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Fechamento
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url('fechamento/consulta') ?>">Consulta</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('fechamento') ?>">Lançamento</a>
					</div>
				</li>-->

			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link text-white " href="<?php echo base_url('sessions/sair') ?>"><i class="fas fa-sign-out-alt"></i> Sair</a>
				</li>
			</ul>
		</div>
		</div>
</nav>


<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 mt-3">
			<span class="h5"><?php echo $this->session->userdata('nome') ?></span>
		</div>
	</div>
</div>
