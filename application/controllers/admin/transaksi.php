<?php 

class Transaksi extends CI_Controller{

	public function index(){
		$data['transaksi'] = $this->rental_model->get_data('transaksi')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_transaksi',$data);
		$this->load->view('templates_admin/footer');
	}

}

 ?>