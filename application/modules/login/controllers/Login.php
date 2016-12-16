<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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


}