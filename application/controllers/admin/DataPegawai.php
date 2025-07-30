<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawai extends CI_Controller {

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
        $data['title'] = "Data Pegawai";
        $data['pegawai'] = $this->PenggajianModel->get_data('pegawai')->result();
        $this->template->load('layout/template','admin/dataPegawai', $data);
    }
    
    public function tambahData()
    {
        $data['title'] = "Tambah Data Pegawai";
        $data['jabatan'] = $this->PenggajianModel->get_data('jabatan')->result();
        $this->template->load('layout/template','admin/tambahPegawai', $data);
    }
    public function tambahDataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        }else{
            $nik                    = $this->input->post('nik');
            $nama_pegawai           = $this->input->post('nama_pegawai');
            $username               = $this->input->post('username');
            $password               = md5($this->input->post('password'));
            $jabatan                = $this->input->post('jabatan');
            $jenis_kelamin          = $this->input->post('jenis_kelamin');
            $tgl_masuk              = $this->input->post('tgl_masuk');
            $status                 = $this->input->post('status');
            $hak_akses              = $this->input->post('hak_akses');
            $photo                  = $_FILES['photo']['name'];
            if ($photo) {
                $config['upload_path'] = './assets/photo/';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('photo')) {
                    echo "Gagal Upload: " . $this->upload->display_errors();
                    die(); 
                } else {
                    $photo = $this->upload->data('file_name');
                }
            } else {
                $photo = ''; 
            }


            $data = array(
                'nik'          => $nik,
                'nama_pegawai' => $nama_pegawai,
                'username'     => $username,
                'password'     => $password,
                'jabatan'      => $jabatan,
                'jenis_kelamin'=> $jenis_kelamin,
                'tgl_masuk'    => $tgl_masuk,
                'status'       => $status,
                'hak_akses'    => $hak_akses,
                'photo'        => $photo,
            );
            $this->PenggajianModel->insert_data($data, 'pegawai');
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
            redirect('admin/dataPegawai');
        }
    }

    public function updateData($id)
    {
        $where = array('id_pegawai' => $id);
        $data['pegawai'] = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai = '$id'")->result();
        $data['jabatan'] = $this->PenggajianModel->get_data('jabatan')->result();
        $data['title'] = "Update Data pegawai";
        $this->template->load('layout/template','admin/pegawai_edit', $data);
        
    }

    public function updateDataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->updateData($this->input->post('id_pegawai'));
        } else {
            $id_pegawai     = $this->input->post('id_pegawai');
            $nik            = $this->input->post('nik');
            $nama_pegawai   = $this->input->post('nama_pegawai');
            $username       = $this->input->post('username');
            $password       = md5($this->input->post('password'));
            $jenis_kelamin  = $this->input->post('jenis_kelamin');
            $jabatan        = $this->input->post('jabatan');
            $tgl_masuk      = $this->input->post('tgl_masuk');
            $status         = $this->input->post('status');
            $hak_akses      = $this->input->post('hak_akses');
            $photo          = $_FILES['photo']['name'];

            if ($photo) {
                $config['upload_path']   = './assets/photo'; // sesuaikan
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                if($this->upload->do_upload('photo')){
					$photo=$this->upload->data('file_name');
					$this->db->set('photo',$photo);
				}else{
					echo $this->upload->display_errors();
				}
            }

            $data = array(
                'nik'            => $nik,
                'nama_pegawai'   => $nama_pegawai,
                'username'       => $username,
                'password'       => $password,
                'jenis_kelamin'  => $jenis_kelamin,
                'jabatan'        => $jabatan,
                'tgl_masuk'      => $tgl_masuk,
                'status'         => $status,
                'hak_akses'      => $hak_akses,
            );

            if ($photo) {
                $data['photo'] = $photo;
            }

            $where = array('id_pegawai' => $id_pegawai);
            $this->PenggajianModel->update_data('pegawai', $data, $where);
            $this->session->set_flashdata('alert',
                '<div id="alert-message" class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-1 text-white"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle w-6 h-6 mr-2">
                    <circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg> 
                    Data Berhasil Update!!
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

            redirect('admin/dataPegawai');
        }
    }


    public function deleteData($id){
        $where = array('id_pegawai' => $id);
        $this->db->delete('pegawai',$where);
        $this->session->set_flashdata('alert',
                '<div id="alert-message" class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-1 text-white"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle w-6 h-6 mr-2">
                    <circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg> 
                    Data Berhasil Dihapus!!
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
        redirect('admin/dataPegawai');
    }

    public function _rules(){
        $this->form_validation->set_rules('nik', 'NIK', 'required', ['required' => 'NIK Harus Diisi!']);
        $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required', ['required' => 'Nama Pegawai Harus Diisi!']);
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'username Harus Diisi!']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'password Harus Diisi!']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', ['required' => 'Jabatan Harus Diisi!']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Harus Diisi!']);
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required', ['required' => 'Tanggal Masuk Harus Diisi!']);
        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Harus Diisi!']);
        $this->form_validation->set_rules('hak_akses', 'hak_akses', 'required', ['required' => 'hak_akses Harus Diisi!']);
    }
}
