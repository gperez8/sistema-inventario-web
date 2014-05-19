<?php
class Model_modificacion_datos extends CI_Model 
{
	function __construct()
	{
		// Llamar al constructor de CI_Model
			parent::__construct();
	}
	
	function datos_inventario_principal($codigo)
	{
		$query = $this->db->query("select * from medicamento 
			where cod_med ="."'".$codigo."'");

		return($query);
	}

	function datos_inventario_unidosis($codigo)
	{
		$query = $this->db->query("select * from inventario_unidosis 
			where cod_med ="."'".$codigo."'");

		return($query);
	}

	function agregar_cambioPrincipal($data){
		
		$this->db->where('cod_med', $data['cod_med']);
		$this->db->update('medicamento',$data);
	}

	function agregar_cambioUnidosis($data){

		$this->db->where('cod_med', $data['cod_med']);
		$this->db->update('inventario_unidosis',$data);
	}
}
?>