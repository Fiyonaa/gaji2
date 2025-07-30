<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
                $data['title'] = "Dashboard";
                $pegawai = $this->db->query("SELECT * FROM pegawai");
                $jabatan = $this->db->query("SELECT * FROM jabatan");
                $kehadiran = $this->db->query("SELECT * FROM kehadiran");
                $admin = $this->db->query("SELECT * FROM pegawai WHERE jabatan = 'admin'");
                $data['pegawai'] = $pegawai->num_rows();
                $data['admin'] = $admin->num_rows();
                $data['jabatan'] = $jabatan->num_rows();
                $data['kehadiran'] = $kehadiran->num_rows();
                $id=$this->session->userdata('id_pegawai');
                // var_dump($data['pegawai'] );
                // die();
                $this->template->load('layout/template','admin/dashboard', $data);
        }
}
