<!doctype html>
<html class="no-js" lang="en">

   

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

		<?php
			echo "numero de dosis: $num_dosis";
		?>


		<?php

			$data = array(
              'name'        => 'x',
              'id'          => 'datepicker',
              'value'       => 'johndoe',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
            );

		echo form_input($data);
		?>


		<p>
			date: <input type="text" id="datepicker">
		</p>
	</body>
</html>