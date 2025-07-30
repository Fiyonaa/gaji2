<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // if ($this->session->userdata('hak_akses') != '1') {
        //     $this->session->set_flashdata('alert','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //         <strong>Anda Belum Login!</strong>
        //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //         <span aria-hidden="true">&times;</span>
        //         </button>
        //     </div>');
        //     redirect('login');
        // };
    }

    public function index() {
        $this->db->from('saran');
        $this->db->order_by('id_saran', 'ASC');
        $saran = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Saran',
            'saran'          => $saran
        );

        $this->template->load('layout/template', 'admin/Saran', $data);
    }

    public function simpan() {
        $data = array(
            'nama'       => $this->input->post('nama', true),
            'email'      => $this->input->post('email', true),
            'isi_saran'  => $this->input->post('isi_saran', true),
            'tanggal'    => date('Y-m-d H:i:s')
        );

        if ($this->db->insert('saran', $data)) {
            $this->session->set_flashdata('saran_status', 'success');
        } else {
            $this->session->set_flashdata('saran_status', 'error');
        }

        redirect('landig');
       
    }
}
