<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'nama' => "Aditia Wahyu Wicaksono",
				'nim'  => "1541180182",
				'alamat' => "Jalan Dewandaru no.14 Malang",
				'no_hp' => '081230464847',
				'hobby' => 'Renang',
			);
		$this->load->view('about');
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
?>