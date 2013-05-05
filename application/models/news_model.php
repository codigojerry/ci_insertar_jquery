<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}

	public function set_news()
	{

		$this->load->helper('url');
		$slug = url_title($this->input->post('titulo'), 'dash', TRUE);
		/*url_title(). Esta función – provista por el helper URL - desarma la cadena que se le pasa, 
		reemplazando todos los espacios por guiones (-) y asegurando que todos los caracteres estén minúsculas.
		Esto le deja un bonito slug, perfecto para crear URIs.*/
		
		$data = array(
			'title' => $this->input->post('titulo'),//capturo los datos que me envian desde la vista
			'slug' => $slug,
			'text' => $this->input->post('texto')
		);
		
		return $this->db->insert('news', $data);
	}

}