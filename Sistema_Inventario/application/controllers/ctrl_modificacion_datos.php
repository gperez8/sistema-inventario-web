<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_modificacion_datos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		// Llamar al constructor de CI_Model
			parent::__construct();

			$this->load->model('model_modificacion_datos');


	}

	public function index()
	{	
		$this->load->view('view_modificacion_datos');
	}	

	public function recibir_datos_rectificacionDatos()
	{

		$consulta = array(

			'nombre_med' 	=> $this->input->post('nombre_med'),
			'tipo_inv'	=> $this->input->post('opciones')

			);

		if ($consulta['tipo_inv'] != 'none' && strlen($consulta['nombre_med']) > 0) 
		{
			if ($consulta['tipo_inv'] == '1') 
			{
				$query = $this->model_modificacion_datos->datos_inventario_principal($consulta['nombre_med']);	
				
				$row = $query->row_array();

				$this->load->view('view_modificacion_datosP',$row);
				//redirect('http://localhost/prueba_sistema_inventario/modificacion_datos');

			}else 
			{
				$query = $this->model_modificacion_datos->datos_inventario_unidosis($consulta['nombre_med']);
			
				$row = $query->row_array();
				
				/*if ($row['cod_med'] == '001C' && $row['cantidad_unidad'] == '60' ) 
				{
					redirect('http://localhost/prueba_sistema_inventario/');
				}*/

				/*$row = $query->row_array();*/

				$this->load->view('view_modificacion_datosU',$row);
			}
		}else
		{
			redirect('http://localhost/prueba_sistema_inventario/rectificacion_datos');
		}

	}

	public function realizar_cambiosPrincipal()
	{
		$data = array(

			'cod_med' 	 			=> $this->input->post('codigo'),
			'nombre_med' 			=> $this->input->post('medicamento'),
			'tipo_presentacion' 	=> $this->input->post('opciones'),
			'num_dosis' 			=> $this->input->post('num_dosis'),
			'cantidad_med' 			=> $this->input->post('cantidad_med'),
			'cantidad_unidad' 		=> $this->input->post('cantidad_unidad'),
			'laboratorio' 			=> $this->input->post('laboratorio'),
			'valor_unitario' 		=> $this->input->post('valor_unitario')
			);




		$this->model_modificacion_datos->agregar_cambioPrincipal($data);
		

		redirect('http://localhost/prueba_sistema_inventario/rectificacion_datos');
	}

	public function realizar_cambiosUnidosis()
	{
		$data = array(

			'cod_med' 	 			=> $this->input->post('codigo'),
			'cantidad_unidad' 		=> $this->input->post('cantidad_unidad')
			);


		$this->model_modificacion_datos->agregar_cambioUnidosis($data);
		redirect('http://localhost/prueba_sistema_inventario/rectificacion_datos');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>


