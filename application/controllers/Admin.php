<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('login');
        }
        $this->load->model('Camera_model');
        $this->load->model('Admin_model');
    }

    public function index()
    {   
        $data['title'] = "Admin Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data['jmlcam'] = $this->Camera_model->countCamera();
        $data['jmlf'] = $this->Camera_model->countFilemanager();
        $this->load->view ('templates/header', $data);
        $this->load->view ('admin/index', $data);
        $this->load->view ('templates/footer');
    }
    public function kas()
    {   
        $data['title'] = "Admin Page";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data['kas'] = $this->Admin_model->getKas();
        $data['saldo'] = $this->Admin_model->totalSaldo();
        $kas = $this->Admin_model->totalSaldo();
        // var_dump($kas);die;
        // foreach ($kas as $k){
        //     $saldo1 = $k->pemasukan += $k->pengeluaran;
        //     // echo $saldo1;die;
        // }
        // $data['saldo'] = $saldo1;

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('pemasukan', 'Pemasukan', 'trim|required');
        $this->form_validation->set_rules('pengeluaran', 'Pengeluaran', 'trim|required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view ('templates/header', $data);
            $this->load->view ('admin/kas', $data);
            $this->load->view ('templates/footer');
        }else {
            $this->Admin_model->addKas();
            $this->session->set_flashdata('message', '<div class="pl-1 col-xl-6"><div class="alert alert-success alert-dismissible fade show" role="alert"><button
                                        type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button> <strong>Well done!</strong> Data kas berhasil ditambahkan</div></div>');
            redirect('admin/kas');
        }
    }
    public function getkas()
    {
        $id = $this->input->post('id');

        $this->output
        ->set_content_type('application/json')
        ->set_status_header(200) // Return status
        ->set_output(json_encode($this->Admin_model->getEditKas($id)));

    }

    public function editkas()
    {
        $this->Admin_model->editKas();
        $this->session->set_flashdata('message', '<div class="pl-1 col-xl-6"><div class="alert alert-success alert-dismissible fade show" role="alert"><button
                                    type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button> <strong>Well done!</strong> Data kas berhasil dirubah</div></div>');
        redirect('admin/kas');
    }
    public function deletekas($id)
    {
        $this->Admin_model->deleteKas($id);
        $this->session->set_flashdata('message', '<div class="pl-1 col-xl-6"><div class="alert alert-warning alert-dismissible fade show" role="alert"><button
                                    type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button> <strong>Warning!</strong> Data kas berhasil dirubah</div></div>');
        redirect('admin/kas');
    }

} 