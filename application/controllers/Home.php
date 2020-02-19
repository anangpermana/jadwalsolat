<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Home_model');
        $this->load->model('Admin_model');
    }

    public function index ()
    {
        $data['saldo'] = $this->Admin_model->totalSaldo();
        $this->load->view ('home/index',$data);
    }
    public function jadwal()
    {
        $this->Home_model->addJadwal();
    }
    public function iqomah()
    {
        $iqomah=$this->Home_model->getJadwal();
        $this->output
        ->set_content_type('application/json')
        ->set_status_header(200) // Return status
        ->set_output(json_encode($iqomah));
    }
    public function display()
    {
        $this->load->view ('home/display');
    }
}