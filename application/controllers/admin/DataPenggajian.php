<?php

class DataPenggajian extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != '1'){
			$this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible fade show" role="alert">
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
		$data['title'] = "Data Gaji Pegawai";
		if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
		$data['potongan'] = $this->PenggajianModel->get_data('potongan_gaji')->result();
		$data['gaji'] = $this->db->query("SELECT pegawai.nik,pegawai.nama_pegawai,
			pegawai.jenis_kelamin,jabatan.nama_jabatan,jabatan.gaji_pokok,
			jabatan.tj_transport,jabatan.uang_makan,kehadiran.alpha,kehadiran.sakit FROM pegawai
			INNER JOIN kehadiran ON kehadiran.nik=pegawai.nik
			INNER JOIN jabatan ON jabatan.nama_jabatan=pegawai.jabatan
			WHERE kehadiran.bulan='$bulantahun'
			ORDER BY pegawai.nama_pegawai ASC")->result();
		$this->template->load('layout/template', 'admin/gaji', $data);
	}

	public function cetak_gaji(){

	$data['title'] = "Cetak Data Gaji Pegawai";
		if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
		$data['potongan'] = $this->PenggajianModel->get_data('potongan_gaji')->result();
		$data['cetak_gaji'] = $this->db->query("SELECT pegawai.nik,pegawai.nama_pegawai,
			pegawai.jenis_kelamin,jabatan.nama_jabatan,jabatan.gaji_pokok,
			jabatan.tj_transport,jabatan.uang_makan,kehadiran.alpha,kehadiran.sakit FROM pegawai
			INNER JOIN kehadiran ON kehadiran.nik=pegawai.nik
			INNER JOIN jabatan ON jabatan.nama_jabatan=pegawai.jabatan
			WHERE kehadiran.bulan='$bulantahun'
			ORDER BY pegawai.nama_pegawai ASC")->result();
		$this->load->view('admin/cetakGaji', $data);
	}
}
?>