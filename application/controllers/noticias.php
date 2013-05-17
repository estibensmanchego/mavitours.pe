<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function index()
	{
		$this->simplepie->set_feed_url('http://elcomercio.feedsportal.com/rss/actualidad/lima.xml');
		$this->simplepie->set_cache_location(APPPATH.'cache/rss');
		$this->simplepie->init();
		$this->simplepie->handle_content_type();
		$data['res_feed'] = $this->simplepie->get_items();		
		$this->load->view('header');
		$this->load->view('noticias',$data);
		$this->load->view('footer');
	}
}