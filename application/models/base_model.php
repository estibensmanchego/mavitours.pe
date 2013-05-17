<?php
class Base_Model extends CI_Model{

	function verificaCorreoExiste($value)
	{

	    $this->db->where('email', $value);
	    $result = $this->db->get('newsletter');
	    return $result;

	}

	public function guardaCorreo($value, $fecha)
	{
		if (!empty($value))
			$this->db->set('email', $value);
		if (!empty($fecha))
			$this->db->set('fecha', $fecha);		
		$this->db->insert('newsletter');
	}
    
}