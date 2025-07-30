<?php

class DataGaji extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('login');
		}
	}
	public function index() 
	{
		$data['title'] = "Data Gaji";
		$nik=$this->session->userdata('nik');
		$data['potongan'] = $this->PenggajianModel->get_data('potongan_gaji')->result();
		$data['gaji'] = $this->db->query("SELECT pegawai.nama_pegawai,pegawai.nik,
			jabatan.gaji_pokok,jabatan.tj_transport,jabatan.uang_makan,
			kehadiran.alpha,kehadiran.sakit,kehadiran.bulan,kehadiran.id_kehadiran
			FROM pegawai
			INNER JOIN kehadiran ON kehadiran.nik = pegawai.nik
			INNER JOIN jabatan ON jabatan.nama_jabatan = pegawai.jabatan
			WHERE kehadiran.nik = '$nik'
			ORDER BY kehadiran.bulan DESC")->result();
			$this->template->load('layout/template', 'pegawai/dataGaji', $data);
	}

	public function cetakSlipGaji($id)
	{
		$data['title'] = 'Cetak Slip Gaji';
		$data['potongan'] = $this->PenggajianModel->get_data('potongan_gaji')-> result();

		$data['print_slip'] = $this->db->query("SELECT pegawai.nik,pegawai.nama_pegawai,jabatan.nama_jabatan,jabatan.gaji_pokok,jabatan.tj_transport,jabatan.uang_makan,kehadiran.alpha,kehadiran.sakit,kehadiran.bulan
			FROM pegawai
			INNER JOIN kehadiran ON kehadiran.nik=pegawai.nik
			INNER JOIN jabatan ON jabatan.nama_jabatan=pegawai.jabatan
			WHERE kehadiran.id_kehadiran = '$id'")->result();
		$this->load->view('pegawai/cetakSlipGaji', $data);
	}
}

?>