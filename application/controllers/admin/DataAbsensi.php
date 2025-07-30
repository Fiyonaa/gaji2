<?php

class DataAbsensi extends CI_Controller {

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
		$data['title'] = "Data Absensi Pegawai";

		if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}

		$data['absen'] = $this->db->query("SELECT kehadiran.*, pegawai.nama_pegawai, pegawai.jenis_kelamin, pegawai.jabatan
			FROM kehadiran
			INNER JOIN pegawai ON kehadiran.nik= pegawai.nik
			INNER JOIN jabatan ON pegawai.jabatan = jabatan.nama_jabatan
			WHERE kehadiran.bulan='$bulantahun' ORDER BY pegawai.nama_pegawai ASC")->result();


		$this->template->load('layout/template', 'admin/dataAbsensi', $data);
	}

	public function tambah()
	{
		if($this->input->post('submit', TRUE) == 'submit') {
			$post = $this->input->post();

			foreach ($post['bulan'] as $key => $value) {
				if($post['bulan'][$key] !='' || $post['nik'][$key] !='')
				{
					$simpan[] = array(
						'bulan'			=> $post['bulan'][$key],
						'nik'			=> $post['nik'][$key],
						'nama_pegawai'	=> $post['nama_pegawai'][$key],
						'jenis_kelamin'	=> $post['jenis_kelamin'][$key],
						'nama_jabatan'	=> $post['nama_jabatan'][$key],
						'hadir'			=> $post['hadir'][$key],
						'sakit'			=> $post['sakit'][$key],
						'alpha'			=> $post['alpha'][$key],
					);
				}
			}
			$this->PenggajianModel->insert_batch('kehadiran', $simpan);
			$this->session->set_flashdata('alert',
                '<div id="alert-message" class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-1 text-white"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle w-6 h-6 mr-2">
                    <circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg> 
                    Data Berhasil Ditambahkan!!
                </div>
                <script>
                    setTimeout(function() {
                        var alert = document.getElementById("alert-message");
                        if (alert) {
                            alert.style.transition = "opacity 0.5s ease";
                            alert.style.opacity = "0";
                            setTimeout(function() {
                                alert.remove();
                            }, 500);    
                        }
                    }, 3000);
                </script>'
            );
			redirect('admin/dataAbsensi');

		}

		$data['title'] = "Form Input Absensi";

		if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
		$data['input_absensi'] = $this->db->query("SELECT pegawai.*, jabatan.nama_jabatan FROM pegawai
			INNER JOIN jabatan ON pegawai.jabatan = jabatan.nama_jabatan
			WHERE NOT EXISTS (SELECT * FROM kehadiran WHERE bulan='$bulantahun' AND pegawai.nik=kehadiran.nik) ORDER BY pegawai.nama_pegawai ASC")->result();
		
		$this->template->load('layout/template', 'admin/tambahAbsensi', $data);
	}
}
?>