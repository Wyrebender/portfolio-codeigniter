<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

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
		$this->portfolio(); //**pass default controller to 'home' method**
	}
	
	public function portfolio()
	{
		//**structure same as 'index' method**
		$this->load->model('image_model');
		
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'Portfolio';
		
		$data['page_name'] = 'Portfolio';
		$data['header_text'] = 'Work Showcase';
		$data['main_content'] = 'portfolio_view';
		$data['query'] = $this->image_model->getAllImages();
		
		$this->load->view('template', $data);
	}
	
	public function work_showcase($url)
	{
		//**structure same as 'index' method**
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'Work Showcase';
		
		$this->load->model('image_model');
		$data['page_name'] = 'Work Showcase';
		$data['main_content'] = 'work_showcase_view';
		$data['query'] = $this->image_model->getImage($url); //**pass in current image**
		
		$this->load->view('template', $data);
	}
}

/* End of file about.php */
/* Location: ./application/controllers/about.php */

?>