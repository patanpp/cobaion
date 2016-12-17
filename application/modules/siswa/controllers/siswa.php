<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
	public function ak()
	{
		if ($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))) {
		$this->template
					->title('Home', 'Datasiswa || Akuntansi')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebar')
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'siswa/ak')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')	
					->build('admin');
				}else{
			redirect('login','refresh');
		}
	}

	public function ap()
	{
		if($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))) {
		$this->template
					->title('Home', 'Datasiswa || Akuntansi')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebar')
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'siswa/ap')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')	
					->build('admin');
				}else{
			redirect('login','refresh');
		}
	}

	public function pm()
	{
		if ($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))) {
		$this->template
					->title('Home', 'Datasiswa || Akuntansi')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebar')
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'siswa/pm')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')	
					->build('admin');
				}else{
			redirect('login','refresh');
		}
	}

	public function tkj()
	{
		if ($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))){
		$this->template
					->title('Home', 'Datasiswa || Akuntansi')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebar')
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'siswa/tkj')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')	
					->build('admin');
				}else{
			redirect('login','refresh');
		}
	}

	public function mm()
	{
		if ($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))) {
		$this->template
					->title('Home', 'Datasiswa || Akuntansi')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebar')
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'siswa/mm')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')	
					->build('admin');
				}else{
			redirect('login','refresh');
		}
	}


}
