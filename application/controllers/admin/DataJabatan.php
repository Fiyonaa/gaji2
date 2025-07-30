<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataJabatan extends CI_Controller {

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
        $data['title'] = "Data Jabatan";
        $data['jabatan'] = $this->PenggajianModel->get_data('jabatan')->result();
        $this->template->load('layout/template','admin/dataJabatan', $data);
        
    }
    public function tambahData()
    {
        $data['title'] = "Tambah Data Jabatan";
        $this->template->load('layout/template','admin/tambahJabatan', $data);
        
    }
    public function tambahDataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        }else{
            $nama_jabatan = $this->input->post('nama_jabatan');
            $gaji_pokok = $this->input->post('gaji_pokok');
            $tj_transport = $this->input->post('tj_transport');
            $uang_makan = $this->input->post('uang_makan');

            $data = array(
                'nama_jabatan'      => $nama_jabatan,
                'gaji_pokok'        => $gaji_pokok,
                'tj_transport'      => $tj_transport,
                'uang_makan'        => $uang_makan
            );
            $this->PenggajianModel->insert_data($data, 'jabatan');
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
            redirect('admin/dataJabatan');
        }
    }

    public function updateData($id)
    {
        $where = array('id_jabatan' => $id);
        $data['jabatan'] = $this->db->query("SELECT * FROM jabatan WHERE id_jabatan = '$id'")->result();
        $data['title'] = "Update Data Jabatan";
        $this->template->load('layout/template','admin/jabatan_edit', $data);
        
    }

    public function updateDataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->updateData($this->input->post('id_jabatan'));
        }else{
            $nama_jabatan = $this->input->post('nama_jabatan');
            $gaji_pokok = $this->input->post('gaji_pokok');
            $tj_transport = $this->input->post('tj_transport');
            $uang_makan = $this->input->post('uang_makan');

            $data = array(
                'nama_jabatan'      => $nama_jabatan,
                'gaji_pokok'        => $gaji_pokok,
                'tj_transport'      => $tj_transport,
                'uang_makan'        => $uang_makan
            );
            $where = array('id_jabatan' => $this->input->post('id_jabatan'));
            $this->PenggajianModel->update_data('jabatan', $data, $where);
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
            redirect('admin/dataJabatan');
        }
    }

    public function deleteData($id){
        $where = array('id_jabatan' => $id);
        $this->db->delete('jabatan',$where);
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
        redirect('admin/dataJabatan');
    }
    
    public function _rules(){
        $this->form_validation->set_rules('nama_jabatan','nama_jabatan','required'); 
        $this->form_validation->set_rules('gaji_pokok','gaji_pokok','required'); 
        $this->form_validation->set_rules('tj_transport','tj_transport','required'); 
        $this->form_validation->set_rules('uang_makan','uang_makan','required'); 
    }
}
