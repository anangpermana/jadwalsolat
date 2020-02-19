<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model
{
        public function getDevice()
    {
        $query = $this->db->get('device');
        return $query->row_array();

    }

    public function updateDevice()
    {
        $data = [
		'key_device' => $this->input->post('keydevice'),
		'name' => $this->input->post('name'),
		'ip_public' => $this->input->post('ippublic'),
		'ip_local' => $this->input->post('iplocal'),
		'location' => $this->input->post('location'),
		'latitude' => $this->input->post('latitude'),
		'longitude' => $this->input->post('longitude'),
		'kontak' => $this->input->post('kontak'),
		'no_hp' => $this->input->post('nohp')
		
        ];
        $keydevnew = $this->input->post('keydevice');
        $dev = $this->db->get_where('device',['key_device'=>$keydevnew])->row_array();
        if ($dev) {

            $this->db->where('id_device', $this->input->post('id'));
            $this->db->update('device', $data);
        
            $url = 'http://rcctv.duckdns.org/rest-server/api/raspidevice';
        $post = [
            'key_device' => $this->input->post('keydevice'),
            'name_device' => $this->input->post('name'),
            'ip_public' => $this->input->post('ippublic'),
            'location' => $this->input->post('location'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'kontak' => $this->input->post('kontak'),
            'no_hp' => $this->input->post('nohp')
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

		$username = 'admin@admin.com';
        $password = 'singadepaa';
        curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);

        $result = curl_exec($ch);
        curl_close ($ch);
        echo $result;
        } else {
            $this->db->insert('device', $data);

        $url = 'http://rcctv.duckdns.org/rest-server/api/raspidevice';
        $post = [
            'key_device' => $this->input->post('keydevice'),
            'name_device' => $this->input->post('name'),
            'ip_public' => $this->input->post('ippublic'),
            'location' => $this->input->post('location'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'kontak' => $this->input->post('kontak'),
            'no_hp' => $this->input->post('nohp')
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

		$username = 'admin@admin.com';
        $password = 'singadepaa';
        curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);

        $result = curl_exec($ch);
        curl_close ($ch);
        echo $result;
        }
    }
    
}