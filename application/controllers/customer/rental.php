<?php 

class Rental extends CI_Controller{
	public function tambah_rental($id)
	{
		$data['detail'] = $this->rental_model->ambil_id_mobil($id);
		$this->load->view('templates_customer/header');
		$this->load->view('customer/tambah_rental',$data);
		$this->load->view('templates_customer/footer');
	}
	public function tambah_rental_aksi()
	{
		$nama			= $this->input->post('nama');
		$tgl_rental		= $this->input->post('tgl_rental');
		$tgl_kembali	= $this->input->post('tgl_kembali');
		$harga			= $this->input->post('harga');
		$denda			= $this->input->post('denda');

		$data = array(
			'nama' 	  => $nama,
			'tgl_rental'  => $tgl_rental,
			'tgl_kembali' 	  => $tgl_kembali,
			'harga' 	  => $harga,
			'denda' 	  => $denda,
			'tgl_pengembalian' 	  => '-',
			'status_rental'		  => 'Belum Selesai',
			'status_pengembalian' => 'Belum Kembali',
		);
		$this->rental_model->insert_data($data, 'transaksi');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  DTransaksi berhasil Silahkan cekout
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('customer/dashboard');

			$this->rental_model->insert_data($data,'transaksi');

			$status = array(
				'status' => '0'
			);

			$nama = array(
				'nama' => $nama
			);

			$this->rental_model->update_data('mobi',$status,$nama);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  DTransaksi berhasil Silahkan cekout
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('customer/dashboard');
	}
}

 ?>