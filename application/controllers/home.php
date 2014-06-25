<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	}
			
	public function index()
	{
		$this->home(); //**pass default controller to 'home' method**
	}
	
	public function home()
	{
		$this->load->model('image_model');
		$data['page_name'] = 'Home'; //**pass the name of the current page **
		$data['intro_text'] = 'Hi. I\'m Franco Haley.
				I am a designer and front-end developer 
				with a passion for designing detailed and 
				user focused web sites that are easy to 
				use and a joy to look at. 
				Have a look.'; //**pass the name of the current page **
				
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'home';
		
		$data['header_text'] = 'Recent Work';
				
		//**data variable stores and looks for 'main_content' inside 'template.php' page file**
		$data['main_content'] = 'home_view';
		
		$data['query'] = $this->image_model->getAllImages(3); //**only show 3 of the latest images**
		
		//**class loads 'data' variable to 'template.php' page file for viewing**
		$this->load->view('template', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

?>