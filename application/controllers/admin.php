<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if ($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))) {
		$this->template
					->title('Home', 'Beranda')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebar')
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'dashboard/dashboard_admin')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')	
					->build('admin');
				}
		elseif ($this->ion_auth->in_group('alumni', $this->session->userdata('user_id'))) {
		$this->template
					->title('Home', 'Beranda')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebaralumni')	
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'dashboard/dashboard_alumni')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')	
					->build('admin');
				}else
			redirect('login','refresh');
		}
	


}
