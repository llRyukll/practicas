<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class blog_model extends CI_Model{
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

    	public function get_noticias()
    	{
	        $query = $this->db->get('noticias');
	        return $query->result();
    	}

    }
?>