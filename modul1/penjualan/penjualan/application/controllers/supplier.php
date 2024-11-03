<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Supplier_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'View Data supplier',
            'userlog' => infoLogin(),
            'Supplier' => $this->supplier_model->getAll(),
            'content' => 'supplier/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data supplier',
            'content' => 'supplier/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function Save()
    {
        $this->supplier_model->Save();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "data supplier berhasil disimpan");
        }
        redirect('supplier');
    }

    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data supplier',
            'Supplier' => $this->supplier_model->getById($id),
            'content' => 'supplier/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function edit()
    {
        $this->supplier_model->editData();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Supplier berhasil diubah!");
        }
        redirect('supplier');
    }

    function delete($id)
    {
        $this->supplier_model->delete($id);
        redirect('supplier');
    }
}
