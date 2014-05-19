<!doctype html>
<html class="no-js" lang="en">
  <head>
   

<!DOCTYPE html>
<html>
		<head>

			<meta charset="utf-8" />
		    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		    <title>Sistema de Inventario</title>
		    
		    <base href="<?php echo base_url();?>">
		    <link rel="stylesheet" type= "text/css" href = "foundation/css/all.css">
		    
		     

		    
		    <script src="foundation/js/jquery-1.11.1.min.js"></script>
		    <script src="foundation/js/jquery-1.11.1.js"></script>

		    <script src="foundation/js/jquery-ui-1.10.4.custom.js"></script>
		    <script src="foundation/js/jquery-ui-1.10.4.custom.min.js"></script>
		    <script src="foundation/js/funciones_jquery.js"></script> 
		    <!-- en funciones_jquery.js estan todas la funciones que usaremos de jquery tal como aparece en el idex que ellos dan-->


			<title> prueba calendario</title>

		</head>
	<body>

		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<div class="panel">
					<h1> <center> header </center>  </h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-8 medium-8 small-8 columns">
				<div class="row">
					<div class="large-6 medium-6 small-6 columns">

						<?php
							$attributes = array('name' => 'realizar_cambios');

							echo form_open('/ctrl_modificacion_datos/realizar_cambiosUnidosis', $attributes);
						?>
		
						<label>Codigo del Medicamento</label>
						<?php
							$data = array(
					              'name'        => 'codigo',
					              'id'          => 'cod_med',
					              'value' 		=>  $cod_med,
					              'maxlength'   => '100',
					              'size'        => '50',
					              'style'       => 'width:50%',
					            );

							echo form_input($data);
						?>

					

						<label>Cantidad por Unidad</label>

						<?php
							$data = array(
				              'name'        => 'cantidad_unidad',
				              'id'          => 'cantidad_unidad',
				              'value' 		=>  $cantidad_unidad,
				              'maxlength'   => '100',
				              'size'        => '50',
				              'style'       => 'width:50%',
				            );

							echo form_input($data);

							$data = array(
								
								'name'  => 'enviar',
								'class' => 'button tiny'
							);
							echo form_submit($data, 'Cambiar');
							echo form_close();
						?>
					</div>
				</div>
			</div>

			<div class="large-4 medium-4 small-4 columns">
				
			</div>			
		</div>

	</body>

</html>