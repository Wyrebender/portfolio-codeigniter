<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

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
		$this->load->library('form_validation');
		$this->load->model('post_model');
		$this->load->model('user_model');
	}
			
	public function index()
	{
		$this->about(); //**pass default controller to 'home' method**
	}
	
	public function about()
	{		
		//**structure same as 'index' method**
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'about';
		
		$data['page_name'] = 'About';
		$data['header_text'] = 'About Me';
		$data['main_content'] = 'about_view';
		
		$this->load->view('template', $data);
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */

?>