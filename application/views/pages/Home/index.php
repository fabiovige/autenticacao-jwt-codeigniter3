
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('sessions/sair')?>">Sair</a></li>
        </ol>
    </nav>
</div>


<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="card mb-3">
				<div class="card-header">
					<span class="h5">Olá, <?php echo $this->session->userdata('nome') ?> </span>
				</div>
			</div>
		</div>
	</div>
</div>

