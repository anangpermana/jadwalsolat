<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Camera_model');
    }
    public function index()
    {
        $data ['title'] = "Live Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data ['datacctv'] = $this->Camera_model->getAllCamera();
        $this->load->view('templates/header', $data);
        $this->load->view('live/index');
        $this->load->view('templates/footer');
    }
}