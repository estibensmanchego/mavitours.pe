<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('footer');
	}

	public function sendMail()
	{
		//optenemos datos nombre dniruc telfax ciudad pais email web comentario
		$nombre = $this->input->post('nombre');
		$dniruc = $this->input->post('dniruc');
		$telfax = $this->input->post('telfax');
		$ciudad = $this->input->post('ciudad');
		$pais = $this->input->post('pais');
		$email = $this->input->post('email');
		$web = $this->input->post('web');
		$comentario = $this->input->post('comentario');

		$html = '
			<head>
			  <title>Mail</title>
			</head>
			<body>
			  <p>Este mensaje fue enviado desde la web.</p>
			  <table>
				<tr>
			      <th><strong>DATOS:</strong></th><th></th>
			    </tr>			  
			    <tr>
			      <td><strong>Nombre:</strong></td><td>'.$nombre.'</td>
			    </tr>
			    <tr>
			      <td><strong>DNI/RUC:</strong></td><td>'.$dniruc.'</td>
			    </tr>
			    <tr>
			      <td><strong>Telefono/Fax:</strong></td><td>'.$telfax.'</td>
			    </tr>
			    <tr>
			      <td><strong>Ciudad:</strong></td><td>'.$ciudad.'</td>
			    </tr>
			    <tr>
			      <td><strong>Pais:</strong></td><td>'.$pais.'</td>
			    </tr>			    
			    <tr>
			      <td><strong>Email:</strong></td><td>'.$email.'</td>
			    </tr>
			    <tr>
			      <td><strong>Web:</strong></td><td>'.$web.'</td>
			    </tr>
			    <p>
			    <strong>Comentario:</strong><br>
			    '.$comentario.'
			    <p>    			    
			  </table>
			</body>
			</html>
		';
		
		$email_setting  = array('mailtype'=>'html');
		$this->email->initialize($email_setting);		
		$this->email->from($email, $nombre);
		$this->email->to('estibensmanchego@gmail.com');
		//$this->email->to('mavitours@mavitours.pe');
		
		$this->email->subject('Formulario contacto - Web Page');
		$this->email->message($html);
		
		$this->email->send();
		
		echo "1";
	}
}