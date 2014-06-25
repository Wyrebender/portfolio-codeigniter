<?php
	class Image_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		//$this->load->database();
	}
	
	function getAllImages($limit = 9999){
		$query = $this->db->query("

			SELECT * 
			FROM images
			ORDER BY imageID DESC
			LIMIT ?
			
			", array(
				$limit
			)
		);
			
		return $query->result(); //**Code Igniter's black box**
	}
	
	function getImage($url){
		$query = $this->db->query("

			SELECT *
			FROM images
			WHERE imageURL = ?
			", array(
				$url
			)
		);
			return $query->result(); //**Code Igniter's black box**
	}	
}

?>