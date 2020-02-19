<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function addJadwal()
    {
        $data =[
            'today' => $this->input->post('waktu'),
            'yesterday' => $this->input->post('kemarin'),
            'asr' => $this->input->post('namasolat[asr]'),
            'dhuhr' => $this->input->post('namasolat[dhuhr]'),
            'fajr' => $this->input->post('namasolat[fajr]'),
            'imsak' => $this->input->post('namasolat[imsak]'),
            'isha' => $this->input->post('namasolat[isha]'),
            'maghrib' => $this->input->post('namasolat[maghrib]'),
            'midnight' => $this->input->post('namasolat[midnight]'),
            'sunrise' => $this->input->post('namasolat[sunrise]'),
            'sunset' => $this->input->post('namasolat[sunset]')
        ];

        $today = date("d-M-Y");
        if ($today = $this->input->post('waktu'))
        {
            $this->db->insert('jadwal', $data);
            $this->db->where('today', $today);
            $this->db->update('jadwal', $data);
            $y = $this->input->post('kemarin');
            $this->db->where('today', $y);
            $this->db->delete('jadwal');
        }else{


        }
        
    }
    public function getJadwal()
    {

        $today = date("d-M-Y");
        return $this->db->get_where('jadwal',['today' => $today])->row();
    }
}