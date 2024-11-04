<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kustomer extends CI_Controller
{
    public function laporan()
    {
        $data = array(
            'title' => 'Tambah Laporan Data Kustomer',
            'content' => 'kustomer/laporan'
        );
        $this->load->view('template/main', $data);
    }
}
