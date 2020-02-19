<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filerecord extends CI_Controller
{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('Filerecord_model');
        $this->load->model('Camera_model');
    }

    public function index()
    {
        $data ['title'] = "Filerecord Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data ['cctv'] = $this->Camera_model->getAllCamera();

        $this->load->view('templates/header', $data);
        $this->load->view('filerecord/index', $data);
        $this->load->view('templates/footer');


    }
    public function detail($id)
    {
        
        $data ['title'] = "Filerecord Detail Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        // $data['filerec'] = $this->Filerecord_model->getFileRecord();
        $data['file'] = $this->Filerecord_model->getFileRecordRow($id);
        $this->load->view('templates/header', $data);
        $this->load->view('filerecord/detail',$data);
        $this->load->view('templates/footer');
    }
}