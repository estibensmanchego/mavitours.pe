<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('inicio');
		$this->load->view('footer');
	}

	public function saveCorreoNewsletter()
	{
		$correo = $this->input->get('email');

		$result = $this->verificaCorreoExiste($correo);

		if ($result->num_rows != 0) {
			$temp = "1";
		} else {
			//Guardar correo.
			$fecha = date('Y-m-d');
			$this->guardaCorreo($correo, $fecha);
			$this->email->from($correo);
			$this->email->to('informes@mavitours.com', 'Informes - Mavitours'); 
			$this->email->bcc('webmaster@disenodesarrolloweb.com');

			$this->email->subject('Contacto - Mavitours');	

			$this->email->send();
			$temp = "0";
		}

		echo $temp;			
	}

	public function verificaCorreoExiste($correo)
	{
		$result = $this->base_model->verificaCorreoExiste($correo);
		return $result;
	}

	public function guardaCorreo($correo, $fecha)
	{	
		$this->base_model->guardaCorreo($correo, $fecha);
	}
}