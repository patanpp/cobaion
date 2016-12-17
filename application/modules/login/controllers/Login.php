<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
	}
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	// 	$this->template
	// 				->title('Home', 'Beranda')
	// 				->set_partial('meta', 'partials/meta')	
	// 				->set_partial('header', 'partials/header')	
	// 				->set_partial('sidebar', 'partials/sidebar')	
	// 				->set_partial('content', 'partials/content')	
	// 				->set_partial('footer', 'partials/footer')	
	// 				->set_partial('js', 'partials/js')	
	// 				->build('admin');
	// }
	$this->home_template
					->title('Home', 'Beranda')
					->set_partial('meta', 'partials/meta')
					->set_partial('header', 'partials/header')
					->set_partial('login', 'login/login')
					->set_partial('footer', 'partials/footer')
					->set_partial('js', 'partials/js')
					->build('login');
	}

	public function log_in()
	{
		$this->data['title'] = $this->lang->line('login_heading');

		//validate form input
		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');


		if ($this->form_validation->run() == true)
		{
			// check to see if the user is logging in
			// check for "remember me"
			$remember = (bool) $this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				$message =  '<div align="center" class="alert alert-danger col-mod-4" id="hide" >
                                <button type="button" class="close" data-dismiss="alert">&times;</button>'.$this->ion_auth->messages().'</div>';
				$this->session->set_flashdata('message', $message);
				redirect('admin', 'refresh');
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$message =  '<div align="center" class="alert alert-danger col-mod-4" id="hide">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>'.$this->ion_auth->errors().'</div>';
				$this->session->set_flashdata('message', $message );
				redirect('login/login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			// the user is not logging in so display the login page
			// set the flash data error message if there is one
			$error = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array('name' => 'identity',
				'id'    => 'identity',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id'   => 'password',
				'type' => 'password',
			);
			$message =  '<div align="center" class="alert alert-danger col-mod-4" id="hide">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>'.$error.'</div>';
			$this->session->set_flashdata('message', $message);
			redirect('login', 'refresh');
		}
	}

	// log the user out
	public function logout()
	{
		$this->data['title'] = "Logout";

		// log the user out
		$logout = $this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('/', 'refresh');
	}



}
