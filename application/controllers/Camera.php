<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camera extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Camera_model');
    }
    public function index ()
    {
        $data ['title'] = "Camera Page";
        $data ['menu_name'] = "Camera";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data ['datacctv'] = $this->Camera_model->getAllCamera();
        $this->load->view ('templates/header', $data);
        $this->load->view ('camera/index', $data);
        $this->load->view ('templates/footer');
    }

    public function add ()
    {
        $this->load->model('Camera_model');
        $data ['title'] = "Add Camera Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data ['datacctv'] = $this->Camera_model->getAllCamera();
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('ipaddress', 'Ipaddress', 'required|trim|valid_ip');
        $this->form_validation->set_rules('urlcapture', 'Urlcapture', 'required|trim');
        $this->form_validation->set_rules('urlstream', 'Urlstream', 'required|trim');
        $this->form_validation->set_rules('user', 'User', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('filelocation', 'Filelocation', 'required|trim');
        $this->form_validation->set_rules('vendor', 'Vendor', 'required|trim');


        if ($this->form_validation->run() == false ){
            
            $this->load->view ('templates/header', $data);
            $this->load->view ('camera/addcam', $data);
            $this->load->view ('templates/header');
        } else {
            $this->Camera_model->addCamera();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Congratulation! camera has been added.
			</div>');
			redirect('camera');

        }

    }

    public function delete($id)
    {
        $this->Camera_model->deleteCamera($id);
        $this->session->set_flashdata('message', 
        '<div class="alert alert-danger" role="alert">
            Camera has been deleted.
        </div>');
        redirect('camera');
    }
    
    public function detail($id)
    {
        $data ['title'] = "Detail Camera Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data ['datacctv'] = $this->Camera_model->getAllCameraRow($id);

        $this->load->view ('templates/header', $data);
        $this->load->view ('camera/detail');
        $this->load->view ('templates/header');

    }

    public function edit($id)
    {
        $this->load->model('Camera_model');
        $data ['title'] = "Edit Camera Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data ['datacctv'] = $this->Camera_model->getAllCamera();
        $data ['datacctvrow'] = $this->Camera_model->getAllCameraRow($id);
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('ipaddress', 'Ipaddress', 'required|trim|valid_ip');
        $this->form_validation->set_rules('urlcapture', 'Urlcapture', 'required|trim');
        $this->form_validation->set_rules('urlstream', 'Urlstream', 'required|trim');
        $this->form_validation->set_rules('user', 'User', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('filelocation', 'Filelocation', 'required|trim');
        $this->form_validation->set_rules('vendor', 'Vendor', 'required|trim');


        if ($this->form_validation->run() == false ){
            
            $this->load->view ('templates/header', $data);
            $this->load->view ('camera/editcam', $data);
            $this->load->view ('templates/header');
        } else {
            $this->Camera_model->editCamera();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Congratulation! camera has been updated.
			</div>');
			redirect('camera');

        }

    }
}