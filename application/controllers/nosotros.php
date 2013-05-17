<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}

	public function historia()
	{
		$this->load->view('header');
		$this->load->view('historia');
		$this->load->view('footer');
	}

	public function mision()
	{
		$this->load->view('header');
		$this->load->view('mision');
		$this->load->view('footer');
	}

	public function vision()
	{
		$this->load->view('header');
		$this->load->view('vision');
		$this->load->view('footer');
	}

	public function valores()
	{
		$this->load->view('header');
		$this->load->view('valores');
		$this->load->view('footer');
	}		

	public function flota()
	{
		$this->load->view('header');
		$this->load->view('flota');
		$this->load->view('footer');
	}

	public function servicios()
	{
		$this->load->view('header');
		$this->load->view('servicios');
		$this->load->view('footer');
	}

	public function seguridad()
	{
		$this->load->view('header');
		$this->load->view('seguridad');
		$this->load->view('footer');
	}					
}