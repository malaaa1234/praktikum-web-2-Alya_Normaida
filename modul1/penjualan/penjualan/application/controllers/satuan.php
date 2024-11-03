<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Satuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('satuan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'View Data Satuan',
            'userlog' => infoLogin(),
            'Satuan' => $this->satuan_model->getAll(),
            'content' => 'satuan/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data satuan',
            'content' => 'satuan/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function Save()
    {
        $this->satuan_model->Save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "data satuan berhasil disimpan");
        }
        redirect('Satuan');
    }

    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data satuan',
            'Satuan' => $this->satuan_model->getById($id),
            'content' => 'satuan/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function edit()
    {
        $this->satuan_model->editData();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data satuan berhasil diubah!");
        }
        redirect('satuan');
    }

    function delete($id)
    {
        $this->satuan_model->delete($id);
        redirect('satuan');
    }
}
