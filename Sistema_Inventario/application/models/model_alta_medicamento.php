<?php
class Model_alta_medicamento extends CI_Model 
{
	function __construct()
	{
		// Llamar al constructor de CI_Model
			parent::__construct();
	}
	
	function tipos_presentacion()
	{
	
		/**eliminar esto al terminar proyecto*/

	$query = $this->db->query("select tipo_presentacion from medicamento");

		if ($query->num_rows() > 0) 
		{
			return($query);
		}
	}

	function agregar_medicamento($data){
		$this->db->insert('medicamento',$data);
	}

}
?>