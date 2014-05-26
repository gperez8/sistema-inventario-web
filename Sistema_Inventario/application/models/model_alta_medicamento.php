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


	function existe_medicamento($data){



	}

	function agregar_medicamento($data_med,$data_lote){


		/*si el medicamento entrante ya existe*/

		$this->db->select('num_dosis');
		$this->db->select('cantidad_med');
		$this->db->where('cod_med',$data_med['cod_med']);
		$query = $this->db->get('medicamento');
		
		if($query->num_rows() == 1)
		{
			/*Se asume que no puede venir del mismo lote*/

			$query = $query->row_array();

			$data_med['num_dosis'] = $data_med['num_dosis'] + $query['num_dosis'];
			$data_med['cantidad_med'] = $data_med['cantidad_med'] + $query['cantidad_med'];

			$this->db->where('cod_med', $data_med['cod_med']);
			$this->db->update('medicamento',$data_med);
			
			$this->db->insert('info_lote',$data_lote);
		}else
		{

			/*Si el medicamento entrante no esta en medicamento
			  se inserta*/

			$this->db->insert('medicamento',$data_med);
			$this->db->insert('info_lote',$data_lote);
		}
		
	}

	function get_nombre_med($q){

		$this->db->select('nombre_med');//SELECT nombre_med
	    $this->db->like('nombre_med', $q);//WHERE nombre LIKE '%q%'
	    $query = $this->db->get('medicamento'); //FROM medicamento
	    
	    if($query->num_rows > 0)
	    {
	      foreach ($query->result_array() as $row)
	      {
	        $row_set[] = htmlentities(stripslashes($row['nombre_med'])); //build an array
	      }
	      echo json_encode($row_set);
	    }
	}
	
	function get_lab($q){

		$this->db->distinct();					//SELECT DISTINCT varios medicamentos que pertenecen a un mismo lab sin esto se mostraria muchas veces el mismo lab
		$this->db->select('laboratorio');		//SELECT laboratorio
	    $this->db->like('laboratorio',$q);		//WHERE laboratorio LIKE '%q%'
	    $query = $this->db->get('medicamento'); //FROM medicamento
	    
	    if($query->num_rows > 0)
	    {
	      foreach ($query->result_array() as $row)
	      {
	        $row_set[] = htmlentities(stripslashes($row['laboratorio'])); //build an array
	      }
	      echo json_encode($row_set);
	    }
	}

}
?>