<?php
class SlipGaji extends CI_Controller {

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
		$data['title'] = "Slip Gaji Pegawai";
		$data['pegawai'] = $this->PenggajianModel->get_data('pegawai')-> result();

		$this->template->load('layout/template', 'admin/slipGaji', $data);
	}

	public function cetak_slip_gaji(){

	$data['title'] = "Cetak Laporan Absensi Pegawai";
	$data['potongan'] = $this->PenggajianModel->get_data('potongan_gaji')-> result();
	$nama = $this->input->post('nama_pegawai');
	$bulan = $this->input->post('bulan');
	$tahun = $this->input->post('tahun');
	$bulantahun =$bulan.$tahun;

	$data['print_slip'] = $this->db->query("SELECT pegawai.nik,pegawai.nama_pegawai,jabatan.nama_jabatan,jabatan.gaji_pokok,jabatan.tj_transport,
		jabatan.uang_makan,kehadiran.alpha,kehadiran.sakit,kehadiran.bulan FROM pegawai INNER JOIN kehadiran ON kehadiran.nik=pegawai.nik
		INNER JOIN jabatan ON jabatan.nama_jabatan=pegawai.jabatan
		WHERE kehadiran.bulan='$bulantahun' AND kehadiran.nama_pegawai='$nama'")->result();

        
	$this->load->view('admin/cetakSlipGaji', $data);
	}
}
?>
