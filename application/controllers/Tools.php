<?php
class Tools extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Filerecord_model');
        $this->load->model('Motion_model');
        $this->load->model('Panic_model');
    }

    public function filerecord()
    {
        $this->Filerecord_model->getFileRecord();
    }

    public function motion()
    {
        $data = $this->Motion_model->getMotion();
    }

    public function panic()
    {
        $data = $this->Panic_model->getPanic();
    }

    public function cekcctv()
    {
        $this->Filerecord_model->cekCctv();
    }
}