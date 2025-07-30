<?php
class PotonganGaji extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPotongan_Gaji');

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
    function index()
    {
        $data['title'] = "Data Potongan Gaji";
        $data['potongan_gaji'] = $this->ModelPotongan_Gaji->TampilPotongan();
        $this->template->load('layout/template','admin/potonganGaji', $data);
    }
    function tambahData()
    {
        $data['title'] = "Tambah Data Potongan Gaji";
        $this->template->load('layout/template','admin/tambahPotongan', $data);
    }
    function tambahDataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahData();
        }else{
            $potongan = $this->input->post('potongan');
            $jml_potongan = $this->input->post('jml_potongan');

            $data = array(
                'potongan'      => $potongan,
                'jml_potongan'  => $jml_potongan
            );
            $this->PenggajianModel->insert_data($data, 'potongan_gaji');
            $this->session->set_flashdata('pesan','
            <div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">Berhasil Ditambahkan!! 😸</div>');
            redirect('admin/PotonganGaji');
        }
    }
    function updateData($id)
    {
        $where = array('id' => $id);
        $data['potongan_gaji'] = $this->db->query("SELECT * FROM potongan_gaji WHERE id = '$id'")->result();
        $data['title'] = "Update Data Potongan Gaji";

        $this->template->load('layout/template','admin/potonganEdit', $data);
    }
    function updateDataAksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->updateData($this->input->post('id'));
        }else{
            $potongan = $this->input->post('potongan');
            $jml_potongan = $this->input->post('jml_potongan');

            $data = array(
                'potongan'      => $potongan,
                'jml_potongan'  => $jml_potongan
            );
            $where = array('id' => $this->input->post('id'));
            $this->PenggajianModel->update_data('potongan_gaji', $data, $where);
            $this->session->set_flashdata('pesan','
            <div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">Berhasil Diupdate!! 😸</div>');
            redirect('admin/PotonganGaji');
        }
    }
    function deleteData($id)
    {
        $where = array('id' => $id);
        $this->PenggajianModel->delete_data($where, 'potongan_gaji');
        $this->session->set_flashdata('pesan','
        <div class="rounded-md px-5 py-4 mb-2 bg-theme-1 text-white">Berhasil Dihapus!! 😸</div>');
        redirect('admin/PotonganGaji');
    }
    function _rules()
    {
        $this->form_validation->set_rules('potongan','Potongan','required');
        $this->form_validation->set_rules('jml_potongan','Jumlah Potongan','required|numeric');
    }
}
?>