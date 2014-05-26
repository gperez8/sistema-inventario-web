
	$(function() {
		$( "#datepicker" ).datepicker();

		/*$("#nombre_med").autocomplete({
			source: "ctrl_alta_medicamento/get_nombre_med"
		});*/

	$("#nombre_med").click(function(){
    		$(this).autocomplete({
				source: "ctrl_alta_medicamento/get_nombre_med"
				});
  		});	

	$("#laboratorio").click(function(){
    		$(this).autocomplete({
				source: "ctrl_alta_medicamento/get_lab"
				});
  		});	

	});

	
