<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings_model');
    }

    public function index()
    {
        
        $data ['datadevice'] = $this->Settings_model->getDevice();
        $data ['title'] = "Settings Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('keydevice', 'Key', 'required|trim');
        $this->form_validation->set_rules('name', 'N', 'required|trim');
        $this->form_validation->set_rules('ippublic','Ipp','required|trim|valid_ip');
        $this->form_validation->set_rules('iplocal', 'Ipl','required|trim|valid_ip');
        $this->form_validation->set_rules('location', 'Loc', 'required|trim');
        $this->form_validation->set_rules('latitude', 'Lat', 'required|trim');
        $this->form_validation->set_rules('longitude', 'Long', 'required|trim');
        $this->form_validation->set_rules('kontak', 'Kon','required|trim');
        $this->form_validation->set_rules('nohp', 'No', 'required|trim');

        if ($this->form_validation->run() == false ) {

            $this->load->view ('templates/header', $data);
            $this->load->view ('settings/index', $data);
            $this->load->view ('templates/footer');
        } else {
            $this->Settings_model->updateDevice();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Congratulations! settings have been updated..
			</div>');
			redirect('settings');
        }
    }
}