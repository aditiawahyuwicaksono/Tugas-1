<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => "Aditia Wahyu Wicaksono",
			'alamat' => "Politeknik Negeri Malang",
			'email' => "aditiawahyu96@gmail.com",
			);
		$this->load->view('home',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */