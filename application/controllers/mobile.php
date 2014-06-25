<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile extends CI_Controller {

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
			$this->home(); //**pass default controller to 'mobile' method**
	}
	
	public function home()
	{
		//$this->load->model('image_model');
						
		//$data['query'] = $this->image_model->getAllImages();		
		$this->load->view('mobile_home_view');
	}
	
	
	public function portfolio()
	{
		$this->load->model('image_model');
						
		$data['query'] = $this->image_model->getAllImages();		
		$this->load->view('mobile_portfolio_view', $data);
	}
	
	public function work_showcase($url)
	{
		//**structure same as 'index' method**
		$data['current_page'] = 'Work Showcase';
		
		$this->load->model('image_model');
		$data['page_name'] = 'Work Showcase';
		$data['query'] = $this->image_model->getImage($url); //**pass in current image**
		
		$this->load->view('mobile_showcase_view', $data);
	}
	
	public function contact()
	{
		
		$this->form_validation->set_rules('field_name', 'Name', 'trim|required|min_length[2]|max_length[24]|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'validate_phone_number');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[2]|max_length[500]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['current_page'] = 'contact';
		
			$data['page_name'] = 'Contact';
			
			$this->load->view('mobile_contact_view', $data);
		}
		else
		{
			$email = set_value('email');
			$name = set_value('field_name');
			$phone = set_value('phone');
			$message = set_value('message');
			
	        $this->load->library('email');
	        
	        $this->email->set_newline('\r\n');
	 
	        $this->email->from($email, $name);
	        $this->email->to('francohaley@gmail.com');
	        $this->email->subject('Message From Contact - Portfolio Site');
	        $this->email->message(
	        	'Reply Information:'.'\n\n\t'
	        	.'Name: '.$name.'\n\t'
	        	.'Email: '.$email.'\n\t'
	        	.'Phone: '.$phone.'\n'
	        	.'Message: '.$message
	        );
	        
		   	// include the Twilio PHP library - download from 
			// http://www.twilio.com/docs/libraries/
			require 'twilio/Services/Twilio.php';
		
			// set our AccountSid and AuthToken - from www.twilio.com/user/account
			$AccountSid = 'AC926c6f628bb24b02ac42dc5aedfd6337';
			$AuthToken = '0d8169b80b30193f94b00aa148683066';
		
			// instantiate a new Twilio Rest Client
			$client = new Services_Twilio($AccountSid, $AuthToken);
		
			// make an associative array of people we know, indexed by phone number
			/*was an array here but */	
		
			// iterate over all our friends
		
				// Send a new outgoinging SMS by POSTing to the SMS resource
				$sms = $client->account->sms_messages->create(
					// the number we are sending From
					'+14155992671', 
		
					// the number we are sending To
					'+14347702197',
		
					// the sms body
			        	'Name: '.$name.' '
			        	.'Email: '.$email.' '
			        	.'Phone: '.$phone.' '
			        	.'Message: please check your email for more info'
				);
				//echo "Sent message to $name";

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
	
	public function about()
	{
		//$this->load->model('image_model');
						
		//$data['query'] = $this->image_model->getAllImages();		
		$this->load->view('mobile_about_view');
	}
	
	
	
	public function contact_submission()
	{	
		//**structure same as 'index' method**
		$data['current_page'] = 'contact';
		$data['header_text'] = 'Contact';
		$data['page_name'] = 'Contact';
		
		$this->load->view('mobile_contact_submission_view', $data);
	}
	
	public function contact_failure()
	{	
		//**structure same as 'index' method**
		$data['current_page'] = 'contact';
		$data['header_text'] = 'Contact';
		$data['page_name'] = 'Contact';
		
		$this->load->view('mobile_contact_failure_view', $data);
	}
}

/* End of file mobile.php */
/* Location: ./application/controllers/mobile.php */

?>