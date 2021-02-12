<script src="<?php echo base_url() ?>/assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
<script src="<?php echo base_url() ?>/assets/js/datepicker-idioma.js" charset="UTF-8"></script>
<script src="<?php echo base_url() ?>/assets/js/jquery-ui.js"></script>


<script>

	$('td.ui-state-disabled').tooltip();

	now = new Date();
	var feriados, i, dias;
	
	var feriados = [];
	var dias = [];

	$.ajax({
		url: "<?php echo getenv('BASE_URL'); ?>/json/calendario",
		type: 'get',
		dataType: 'json',
		beforeSend: function() {
		},
		success: function(data) {
			dias = data['calendario'];
			feriados = data['calendarioTitle'];
			console.log(feriados);
			console.log(dias);

			$('#datepicker').datepicker({
				inline: true,
				showOtherMonths: true,
				selectOtherMonths: true,
				format: "dd/mm/yyyy",
				language: "pt-BR",
				daysOfWeekDisabled: "0,6",
				autoclose: true,
				endDate: new Date(),
				beforeShowDay: function(dateText, inst) {
					var datepickerDay = ('0' + dateText.getDate()).slice(-2) + '/' + ('0' + (dateText.getMonth()+1)).slice(-2) + '/' + dateText.getFullYear();
					if(dias.indexOf(datepickerDay.trim()) > -1) {				
						ret = [false, "", feriados[dias.indexOf(datepickerDay)].split('-')[1]];						
					} else {
						ret = [true, "", "disponivel"];
					}
					return ret;
				},
			});
		},
		complete: function() {
		},
		error: function() {
		}
	});	





	/*
	    $('#datepicker').datepicker({
			showOtherMonths: true,
	        selectOtherMonths: true,
	        format: "dd/mm/yyyy",
	        language: "pt-BR",
	        daysOfWeekDisabled: "0,6",
	        autoclose: true,
	        endDate: new Date()
		});
		*/

	/*
    $('#escolas').change(function(){
        $('#aviso').hide('fade');
        let id_escola = $(this).val();
        var options_cidades = '<option value="">Selecione uma Turma</option>';
        $.ajax({
            url: "<?php echo getenv('BASE_URL'); ?>/frequencia/jsonTurmas",
            type: 'post',
            dataType: 'json',
            data: {
                id_escola: id_escola
            },
            beforeSend: function() {
                //options_cidades = '<option value="">Carregando...</option>';
                //$("#turma").html(options_cidades);
            },
            success: function(turmas) {
                //options_cidades = '<option value="">Selecione uma Turma</option>';
                $.each(turmas, function (key, val) {
                    options_cidades += '<option value="' + key + '">' + val.nome + '-' + val.codigo + '</option>';
                });
                $("#turmas").html(options_cidades);
            },
            complete: function() {
            }
        });
    });

    $('#turmas').change(function(){
        $('#aviso').hide('fade');
    });

    $('#btnConsulta').click(function(event){
        event.preventDefault();
        var id_escola = $('#escolas').val();
        var id_turma = $('#turmas').val();
        var data_inicio = $('#data_inicio').val();
        var data_final = $('#data_final').val();

        if(id_escola === '') {
            $('#aviso li').html('Escola obrigatório')
            $('#aviso').show('fade');
            return;
        }
        if(id_turma === '') {
            $('#aviso li').html('Turma obrigatório')
            $('#aviso').show('fade');
            return;
        }

        if(data_inicio === '' || data_final === '') {
            $('#aviso li').html('Período obrigatório')
            $('#aviso').show('fade');
            return;
        }

        // submit
        $("#frmConsulta").submit();

    });
	*/
</script>
