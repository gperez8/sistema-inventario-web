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

							echo form_open('/ctrl_modificacion_datos/realizar_cambiosPrincipal', $attributes);


						?>




						<label>Nombre de Medicamento</label>

						<?php
							$data = array(
				              'name'        => 'medicamento',
				              'id'          => 'nombre_med',
				              'value' 		=>  $nombre_med,
				              'maxlength'   => '100',
				              'size'        => '50',
				              'style'       => 'width:50%',
				            );

							echo form_input($data);
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

						<label>Presentación de Medicamento</label>
						<?php
							$opciones = array(

 								'none' => '',
								'1' => 'tabletas',
						 		'2' => 'capsulas blanda',
							 	'3' => 'comprimidos',
								'4' => 'jarabe',
								'5' => 'solucion',
								'6' => 'ampollas',
								'7' => 'tabletas masticables',
								'8' => 'capsulas'
							);

							 function tipo_opcion($tipo_presentacion)
							 {	
									switch ($tipo_presentacion) 
									{
							    		case "tabletas":
							        		return('1');
							        		break;
							    		case "capsulas blanda":
							        		return('2');
							        		break;
							    		case "comprimidos":
							       			return('3');
							        		break;
							        	case "jarabe":
							       			return('4');
							        		break;
							        	case "solucion":
							       			return('5');
							        		break;
							        	case "ampollas":
							       			return('6');
							        		break;
							        	case "tabletas masticables":
							       			return('7');
							        		break;
							        	case "capsulas":
							       			return('8');
							        		break;
									}
							 }	
								

							$selector = array(tipo_opcion($tipo_presentacion));
							
							echo form_dropdown('opciones',$opciones,$selector);
						?>
						

						<label>Numero de Dosis</label>

						<?php
							$data = array(
				              'name'        => 'num_dosis',
				              'id'          => 'num_dosis',
				              'value' 		=>  $num_dosis,
				              'maxlength'   => '100',
				              'size'        => '50',
				              'style'       => 'width:50%',
				            );

							echo form_input($data);
						?>

						<label>Cantidad de Medicamentos</label>

						<?php
							$data = array(
				              'name'        => 'cantidad_med',
				              'id'          => 'cantidad_med',
				              'value' 		=>  $cantidad_med,
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
						?>

						<label>Laboratotio</label>

						<?php
							$data = array(
				              'name'        => 'laboratorio',
				              'id'          => 'laboratorio',
				              'value'		=>  $laboratorio,
				              'maxlength'   => '100',
				              'size'        => '50',
				              'style'       => 'width:50%',
				            );

							echo form_input($data);
						?>

						<label>Valor Unitario</label>

						<?php
							$data = array(
				              'name'        => 'valor_unitario',
				              'id'          => 'valor_unitario',
				              'value' 		=>  $valor_unitario,
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

							/*foreach ($result->result_array() as $value) {
								echo $value['tipo_presentacion'] .'<br>';
							}*/


						?>
					</div>
				</div>
			</div>

			<div class="large-4 medium-4 small-4 columns">
				
			</div>			
		</div>

	</body>

</html>