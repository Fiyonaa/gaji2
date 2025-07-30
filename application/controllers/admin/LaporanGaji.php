<?php

class LaporanGaji extends CI_Controller {

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
		$data['title'] = "Laporan Gaji Pegawai";
		$this->template->load('layout/template', 'admin/laporanGaji', $data);
	}

	public function cetak_laporan_gaji() {
		$data['title'] = "Cetak Laporan Gaji Pegawai";
	
		// Ambil bulan dan tahun dari input post atau default ke bulan & tahun sekarang
		$bulan = $this->input->post('bulan') ?? date('m');
		$tahun = $this->input->post('tahun') ?? date('Y');
	
		$data['bulan_selected'] = $bulan;
		$data['tahun_selected'] = $tahun;
	
		// Gabungkan bulan dan tahun untuk mencari data
		$bulantahun = $bulan . $tahun;
	
		// Ambil data potongan dan gaji berdasarkan bulan dan tahun
		$data['potongan'] = $this->PenggajianModel->get_data('potongan_gaji')->result();
		$data['cetak_gaji'] = $this->db->query("SELECT pegawai.nik,pegawai.nama_pegawai,
			pegawai.jenis_kelamin,jabatan.nama_jabatan,jabatan.gaji_pokok,
			jabatan.tj_transport,jabatan.uang_makan,kehadiran.alpha, kehadiran.sakit 
			FROM pegawai
			INNER JOIN kehadiran ON kehadiran.nik=pegawai.nik
			INNER JOIN jabatan ON jabatan.nama_jabatan=pegawai.jabatan
			WHERE kehadiran.bulan='$bulantahun'
			ORDER BY pegawai.nama_pegawai ASC")->result();
	
		// Load template untuk menampilkan laporan
		$this->load->view('admin/cetakGaji', $data);
	}
	
	
}

?>