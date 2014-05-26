<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_alta_medicamento extends CI_Controller {

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

			$this->load->model('model_alta_medicamento');


	}

	public function index()
	{
		

		$ver['result'] = $this->model_alta_medicamento->tipos_presentacion(); 
		
		$this->load->view('view_alta_medicamento',$ver);
	}

	public function recibir_datos_altaMedicamento(){

		$data_med = array(

			'cod_med' 	 			=> $this->input->post('codigo'),
			'nombre_med' 			=> $this->input->post('medicamento'),
			'tipo_presentacion' 	=> $this->input->post('opciones'),
			'num_dosis' 			=> $this->input->post('num_dosis'),
			'cantidad_med' 			=> $this->input->post('cantidad_med'),
			'cantidad_unidad' 		=> $this->input->post('cantidad_unidad'),
			'laboratorio' 			=> $this->input->post('laboratorio'),
			'valor_unitario' 		=> $this->input->post('valor_unitario')

		);

		$data_lote = array(

			'cod_med'		    => $data_med['cod_med'],
			'lote'	 		    => $this->input->post('lote'),
			'fecha_eleboracion' => $this->input->post('f_eleboracion'),
			'fecha_vencimiento' => $this->input->post('f_vencimiento')
		);


		$this->model_alta_medicamento->agregar_medicamento($data_med,$data_lote);
		redirect('http://localhost/prueba_sistema_inventario/alta_medicamento');

	}

	public function get_nombre_med(){

		if (isset($_GET['term']))	/// Nota: siempre debe ser $_GET['term'] si cambias term no funciona
    	{
      		$q = strtolower($_GET['term']);
      		$this->model_alta_medicamento->get_nombre_med($q);
		}
	}

	public function get_lab(){

		if (isset($_GET['term']))	/// Nota: siempre debe ser $_GET['term'] si cambias term no funciona
    	{
      		$q = strtolower($_GET['term']);
      		$this->model_alta_medicamento->get_lab($q);
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>


