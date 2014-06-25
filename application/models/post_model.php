<?php
	class Post_model extends CI_Model{
		
	function __construct(){
		parent::__construct();
	}
	
/*	
	//**php way to write a query inside a method**
	function getAllPosts($limit = 9999){
		$query = $this->db->query("

			SELECT * 
			FROM posts
			ORDER BY postDate DESC
			LIMIT ?
			
			", array(
				$limit
			)
		);
			
		return $query->result(); //**Code Igniter's black box**
	}
*/

	//**Codeigniter's way to write a query inside a method**
	function getAllPosts($limit,$start)
	{
	    $this->db->limit($limit,$start);
		$this->db->order_by("postID", "desc"); 
	    $query = $this->db->get('posts');
	    if($query->num_rows()>0)
	    {
	        foreach ($query->result() as $row)
	        {
	            $data[] = $row;
	        }
	 
	        return $data;
	    }
	    else
	    {
	        return FALSE;
	    }
	}

	
	function getPost($id){
		$query = $this->db->query("
			SELECT *
			FROM posts
			WHERE postID = ?
			", array(
				$id
			)
		);
			return $query->result(); //**Code Igniter's black box**
	}
	
	function newPost($postTitle, $postBody, $postDate, $displayDateTime, $userID = 1){
        $data = array(
            'postTitle' => $postTitle,
            'postBody' => $postBody,
            'postDate' => $postDate,
            'displayDateTime' => $displayDateTime,
            'userID' => $userID
        );
        $this->db->insert('posts', $data); //**Code Igniter's black box**
    } 
}

?>