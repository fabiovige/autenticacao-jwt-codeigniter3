<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<title><?php echo NAME_APP ?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	
    <!-- font-awesome -->
    <script src="<?php echo base_url(); ?>assets/js/ddd65175b8.js"></script>

	<style>
		* {
			margin: 0;
			padding: 0;
			outline: 0;
			box-sizing: border-box;
		}

		body {
			padding-right: 20px;
			padding-left: 20px;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			background-color: #f5f5f5;
			-webkit-font-smoothing: antialiased;
		}


		.form-signin {
			width: 100%;
			max-width: 420px;
			padding: 0px 10px 0 10px;
			margin: 30px auto 0;
			background: #fff;

			-webkit-border-radius: 10px 10px 10px 10px;
			border-radius: 10px 10px 10px 10px;
		}

		.login-block {
			margin: 30px auto;
			min-height: 93.6vh
		}

		.login-block .auth-box {
			margin: 20px auto 0;
			max-width: 450px !important
		}

		.card {
			border-radius: 5px;
			-webkit-box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
			box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
			border: none;
			margin-bottom: 30px;
			-webkit-transition: all .3s ease-in-out;
			transition: all .3s ease-in-out;
			background-color: #fff
		}

		.card .card-block {
			padding: 1.25rem
		}

		.f-80 {
			font-size: 80px
		}

		.form-group {
			margin-bottom: 1.25em
		}

		.form-material .form-control {
			display: inline-block;
			height: 43px;
			width: 100%;
			border: none;
			border-radius: 0;
			font-size: 16px;
			font-weight: 400;
			padding: 9px;
			background-color: transparent;
			-webkit-box-shadow: none;
			box-shadow: none;
			border-bottom: 1px solid #ccc
		}

		.btn-md {
			padding: 10px 16px;
			font-size: 15px;
			line-height: 23px
		}

		.btn-primary {
			background-color: #4099ff;
			border-color: #4099ff;
			color: #fff;
			cursor: pointer;
			-webkit-transition: all ease-in .3s;
			transition: all ease-in .3s
		}

		.btn {
			border-radius: 2px;
			font-size: 15px;
			padding: 10px 19px;
			cursor: pointer
		}

		.m-b-20 {
			margin-bottom: 20px
		}

		.btn-md {
			padding: 10px 16px;
			font-size: 15px;
			line-height: 23px
		}

		.heading {
			font-size: 21px
		}

		#infoMessage p {
			color: red !important
		}

		.btn-google {
			color: #545454;
			background-color: #ffffff;
			box-shadow: 0 1px 2px 1px #ddd
		}

		.or-container {
			align-items: center;
			color: #ccc;
			display: flex;
			margin: 25px 0
		}

		.line-separator {
			background-color: #ccc;
			flex-grow: 5;
			height: 1px
		}

		.or-label {
			flex-grow: 1;
			margin: 0 15px;
			text-align: center
		}
	</style>

</head>

<body>



	<?php
	$attributes = ['class' => 'form-signin'];
	echo form_open('sessions/index', $attributes);
	?>

	<div class="text-center">
		<div class="form-signin">
			<h3 class="mb-4 font-weight-normal"><?php echo NAME_APP; ?></h3>
			<?php
			if ($this->session->flashdata('error')) {
			?>
				<div class="alert alert-warning" role="alert">
					<?php echo $this->session->flashdata('error'); ?>
				</div>
			<?php
			}

			if (validation_errors()) {
			?>
				<div class="alert alert-warning" role="alert">
					Login falhou
				</div>
			<?php
			}
			?>


			<div class="form-group text-left">
				<label for="cpf">E-mail</label>
				<input type="email" class="form-control" id="email" name="email" maxlength="150">
			</div>
			<div class="form-group text-left mb-3">
				<label for="password">Senha</label>
				<input type="password" class="form-control" id="password" name="password" maxlength="20">
			</div>
			<button class="btn btn-info btn-block my-3 rounded" type="submit"><i class="fas fa-sign-in-alt"></i> Entrar</button>


		</div>
	</div>
	
	</form>

	<script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js" ></script>
	<script src="<?php echo base_url(); ?>assets/js/popper.min.js" ></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" ></script>


</body>

</html>
