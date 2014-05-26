<?php
class Model_modificacion_datos extends CI_Model 
{
	function __construct()
	{
		// Llamar al constructor de CI_Model
			parent::__construct();
	}
	
	function datos_inventario_principal($nombre_med)
	{
		$query = $this->db->query("select * from medicamento 
			where nombre_med ="."'".$nombre_med."'");

		return($query);
	}

	function datos_inventario_unidosis($nombre_med)
	{
		$this->db->select('cod_med'); 
		$this->db->where('nombre_med',$nombre_med);
		$query = $this->db->get('medicamento');

		if ($query->num_rows() == 1) 
		{
			$query = $query->row_array();

			$this->db->select('*'); 
			$this->db->where('cod_med',$query['cod_med']);
			$result = $this->db->get('inventario_unidosis');
			return($result);
		}

		
		/*this->db->select('nom');
		$this->db->from('inventario_unidosis');
		$this->db->join('medicamento', 'medicamento.cod_med = inventario_unidosis.cod_med');
		$this->db->where('nombre_med',$nombre_med);
		$query = $this->db->get();*/


		
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