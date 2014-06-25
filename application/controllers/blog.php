<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

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
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->helper('date');
		$this->load->library('form_validation');
		$this->load->model('post_model');
		//$this->load->model('user_model');
	}
			
	public function index()
	{
		$this->recent_post(); //**pass default controller to 'home' method**
	}
	
	public function recent_post()
	{	
		
	
		//redirect('access');
		//$this->is_logged_in(); //**this will check to see if the user is logged in.**
		
/*		//**Login functionality**
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			//echo 'You don\'t have permission to access this page';
			$this->login();
			//die();
		}
*/
		//**If login functionality is enable place code (Line 53-74) inside 'else' statement**
		//else{};
		
		$this->load->library('pagination');
			
		$base_url = site_url('blog/recent_post');
		$config['base_url'] = $base_url;
		$config['total_rows'] = $this->db->get('posts')->num_rows();
	    $config['per_page'] = 5;
	    $config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		
		//**structure same as 'index' method**
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'blog';
		
		$data['page_name'] = 'Blog';
		$data['header_text'] = 'Recent Posts';
		$data['main_content'] = 'blog_view';
		
		$page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
		$data['query'] = $this->post_model->getAllPosts($config['per_page'],$page);    
		
		$data['links'] = $this->pagination->create_links();
		$this->load->view('template', $data);
	}
	
/*	
	//**method to check login status - code inserted inside blog method**
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			//echo 'You don\'t have permission to access this page';
			
			die();
		}
	}
*/
	
	//**Use only if login functionality is enabled (Line-41)**
	public function login()
	{				
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('userPassword', 'Password', 'trim|required|min_length[4]|md5');
		
		if ($this->form_validation->run() == FALSE)
		{
			//**structure same as 'index' method**
			$data['global_nav'] = 'includes/navigation';
			$data['current_page'] = 'blog';
			
			$data['page_name'] = 'Blog';
			$data['header_text'] = 'Login';
			$data['main_content'] = 'login_view';
			
			$this->load->view('template', $data);
		}
		else
		{
			/*
				//**test to see if input data is pass in through these variables**
				extract($_POST);
				echo $username;
				echo '<br />';
				echo $userPassword;
			*/
			
			$username = $this->input->post('username');
			$userPassword = $this->input->post('userPassword');
			$user_data = $this->user_model->check_login($username, $userPassword);
			
			//$this->session->set_flashdata('login_error', TRUE);
			
			if(!$user_data)
			{
				//**login failed**
				
				//**Invalid username or password message shows if the login button is clicked twice**
				$data['global_nav'] = 'includes/navigation';
				$data['current_page'] = 'blog';
				
				$data['page_name'] = 'Blog';
				$data['header_text'] = 'Login';
				$data['main_content'] = 'login_view';
				
				//$this->session->set_flashdata('login_error', TRUE);
				$this->load->view('template', $data);
				
			}
			else
			{
				//**login successful**
				$data = array(
					'username' => $username,
					'userPassword' => $userPassword,
					'is_logged_in' => TRUE
				);
				
				$this->session->set_userdata($data);
				$this->blog();
			}
		}	
	}
	
	//**Use only if login functionality is enabled (Line-41)**
	public function logout()
	{
		//**structure same as 'index' method**
		$this->session->set_userdata('is_logged_in', FALSE);
		$this->session->sess_destroy();
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'blog';
		
		$data['page_name'] = 'Blog';
		$data['header_text'] = 'Logout';
		$data['main_content'] = 'logout_view';

		$this->load->view('template', $data);
	}	
	
	public function new_post()
	{	
		$this->form_validation->set_rules('postTitle', 'Title', 'trim|required|min_length[2]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('postBody', 'New Post', 'trim|required|min_length[2]|max_length[2000]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{		
			//**structure same as 'index' method**
			$data['global_nav'] = 'includes/navigation';
			$data['current_page'] = 'blog';
			
			$data['page_name'] = 'Blog';
			$data['header_text'] = 'Write New Post';
			$data['main_content'] = 'new_post_view';
			
			$this->load->view('template', $data);
		}
		else
		{
			$postTitle = $this->input->post('postTitle');
            $postBody = $this->input->post('postBody');
			$postDate = $this->input->post('postDate');
			$displayDateTime = $this->input->post('displayDateTime');
			
            $this->post_model->newPost($postTitle, $postBody, $postDate, $displayDateTime);
            $this->recent_post();			
        }
	}
	

	public function post($id)
	{
		//**structure same as 'index' method**
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'blog';
		$data['header_text'] = 'blog';
		$data['page_name'] = 'Blog';
		$data['main_content'] = 'post_view';
		$data['query'] = $this->post_model->getPost($id); //**pass in current post**
		
		$data['postData'] = $this->post_model->getPost($id);
		
		$this->load->view('template', $data);
	}
	
	//**Use only if login functionality is enabled (Line-41)**
	public function signup()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('userPassword', 'Password', 'trim|required|min_length[4]|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('userEmail', 'Email', 'trim|required|valid_email');
		
		if ($this->form_validation->run() == FALSE)
		{
		
			//**structure same as 'index' method**
			$data['global_nav'] = 'includes/navigation';
			$data['current_page'] = 'blog';
			
			$data['page_name'] = 'Blog';
			$data['header_text'] = 'Signup';
			$data['main_content'] = 'signup_view';
			$this->load->view('template', $data);
		}
		else
		{
			$username = $this->input->post('username');
            $userPassword = $this->input->post('userPassword');
            $userEmail = $this->input->post('userEmail');
            
            $insert = $this->user_model->newUser($username, $userPassword, $userEmail);
            $this->recent_post();
		}	
	}	
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */

?>