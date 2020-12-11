<?php

class DController  extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('DModel');
	}

	public function index()
	{
		$data['isi'] = $this->DModel->getALL();

		$this->load->view('kelompok_d/kelompok_d', $data);
	}

	public function tambah()
	{
		$this->load->view('kelompok_d/kelompok_d_tambah');
	}

	public function proses_tambah()
	{
		$kolom_jurusan	 	= $this->input->post('txtkolom_jurusan');
		$kolom_kelas	 	= $this->input->post('txtkolom_kelas');
		$kolom_isi	 		= $this->input->post('txtkolom_isi');

		$data_input = [
			'kolom_jurusan' 	=> $kolom_jurusan,
			'kolom_kelas' 		=> $kolom_kelas,
			'kolom_isi' 		=> $kolom_isi

		];

		$simpan = $this->DModel->add($data_input);

		$this->session->set_flashdata('pesan_kelompok_d', '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Kelompok D Berhasil Di Tambahkan !
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
			</div>
			');

		redirect('DController/index');
	}
}
