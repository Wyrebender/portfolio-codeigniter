<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

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
		$this->contact(); //**pass default controller to 'home' method**
	}
	
	public function contact()
	{
		
		$this->form_validation->set_rules('field_name', 'Name', 'trim|required|min_length[2]|max_length[24]|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'validate_phone_number');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[2]|max_length[500]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['global_nav'] = 'includes/navigation';
			$data['current_page'] = 'contact';
		
			$data['page_name'] = 'Contact';
			$data['header_text'] = 'Contact';
			$data['main_content'] = 'contact_view';
			
			$this->load->view('template', $data);
		}
		else
		{
			$email = set_value('email');
			$name = set_value('field_name');
			$phone = set_value('phone');
			$message = set_value('message');
			
	        $this->load->library('email');
	        
	        $this->email->set_newline("\r\n");
	 
	        $this->email->from($email, $name);
	        $this->email->to('francohaley@gmail.com');
	        $this->email->subject('Message From Contact - Portfolio Site');
	        $this->email->message(
	        	'Reply Information:'."\n\n\t"
	        	.'Name: '.$name."\n\t"
	        	.'Email: '.$email."\n\t"
	        	.'Phone: '.$phone."\n\t"
	        	.'Message: '.$message
	        );
	        
	        
            if($this->email->send())
	        {
	            //echo 'Your email was sent, successfully.';
				$this->contact_submission();
	        }
	 
	        else
	        {
	            //show_error($this->email->print_debugger());
				$this->contact_failure();
	        }
		}
	}
	
	public function contact_submission()
	{	
		//**structure same as 'index' method**
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'contact';
		$data['header_text'] = 'Contact';
		$data['page_name'] = 'Contact';
		$data['main_content'] = 'contact_submission_view';
		
		$this->load->view('template', $data);
	}
	
	public function contact_failure()
	{	
		//**structure same as 'index' method**
		$data['global_nav'] = 'includes/navigation';
		$data['current_page'] = 'contact';
		$data['header_text'] = 'Contact';
		$data['page_name'] = 'Contact';
		$data['main_content'] = 'contact_failure_view';
		
		$this->load->view('template', $data);
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */

?>