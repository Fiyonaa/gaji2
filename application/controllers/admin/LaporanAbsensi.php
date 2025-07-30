<?php

class LaporanAbsensi extends CI_Controller {

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

	public function index() {	
		$data['title'] = "Laporan Absensi Pegawai";
		$this->template->load('layout/template','admin/laporanAbsensi', $data);
	}

	public function cetak_laporan_absensi(){

	$data['title'] = "Cetak Laporan Absensi Pegawai";
		$bulan = $this->input->post('bulan') ?? date('m');
		$tahun = $this->input->post('tahun') ?? date('Y');
	
		$data['bulan_selected'] = $bulan;
		$data['tahun_selected'] = $tahun;
	
		// Gabungkan bulan dan tahun untuk mencari data
		$bulantahun = $bulan . $tahun;
	$data['lap_kehadiran'] = $this->db->query("SELECT * FROM kehadiran WHERE bulan='$bulantahun' ORDER BY nama_pegawai ASC")->result();
	$this->load->view( 'admin/cetakAbsensi', $data);
	}
}

?>