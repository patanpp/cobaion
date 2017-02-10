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

	public function data($jurusan,$kelas='')
	{
		if ($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))) {
			if($jurusan=='ak'){
				$data['jurusan']='Akuntansi';
			}elseif($jurusan=='ap'){
				$data['jurusan']='Administrasi Perkantoran';
			}elseif($jurusan=='pm'){
				$data['jurusan']='Pemasaran';
			}elseif($jurusan=='tkj'){
				$data['jurusan']='Teknik Jaringan & Komputer ';
			}else{
				$data['jurusan']='MultiMedia';
			}
			
			$data['kelas']=$kelas;
			$data['jr']=$jurusan;
		$this->template
					->title('Home', 'Datasiswa || Akuntansi')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebar')
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'siswa/ak')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')
					->set_partial('content', 'siswa/data_siswa',$data)	
					->build('admin');
				}else{
			redirect('login','refresh');
		}
	}

	public function tambah_siswa($jurusan,$kelas='')
	{
		if ($this->ion_auth->in_group('admin', $this->session->userdata('user_id'))) {
		$this->template
					->title('Home', 'Datasiswa || Akuntansi')
					->set_partial('meta', 'partials/meta')	
					->set_partial('header', 'partials/header')	
					->set_partial('sidebar', 'partials/sidebar')
					->set_partial('bc', 'partials/bc')	
					->set_partial('content', 'siswa/tambah_siswa')	
					->set_partial('footer', 'partials/footer')	
					->set_partial('js', 'partials/js')	
					->build('admin');
				}else{
			redirect('login','refresh');
		}
	}




}
