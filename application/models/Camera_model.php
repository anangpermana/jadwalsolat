<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Camera_model extends CI_Model
{
    // public function getIdDevice()
    // {
    //     $query = $this->db->get('device');
    //     return $query->result_array();
    // }

    public function addCamera()
    {
        $device = $this->db->get('device')->row_array();
        $data = [
            'device_id' => 1,
			'name' => $this->input->post('name'),
			'ipaddress' => $this->input->post('ipaddress'),
			'url_capture' => $this->input->post('urlcapture'),
			'user_cctv' => $this->input->post('user'),
			'pass_cctv' => $this->input->post('password'),
			'file_location' => $this->input->post('filelocation'),
			'status' => 200,
			'vendor' => $this->input->post('vendor'),
			'url_stream' => $this->input->post('urlstream')
			
            ];
        
        $this->db->insert('cctv', $data);
        $lastctv = $this->db->limit(1)->order_by('id DESC')->get('cctv')->row_array();
        $id = $lastctv['id'];
        
        $url = 'http://rcctv.duckdns.org/rest-server/api/cctv';
        $post = [
            'id_cctvl' => $id,
            'name_cctv' => $this->input->post('name'),
            'device_key' => $device['key_device'],
            'url_capture' => $this->input->post('urlcapture'),
            'url_stream' =>$this->input->post('urlstream'),
            'status' => 200,
            'vendor' => $this->input->post('vendor')
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

    public function getAllCamera()
    {
        $query = $this->db->get('cctv');
        return $query->result_array();
    }

    public function getAllCameraRow($id)
    {
        $query = $this->db->get_where('cctv',['id' => $id]);
        return $query->row_array();
    }

    public function deleteCamera($id)
    {   
        //$this->db->where('id', $id);
        $this->db->delete('cctv', ['id' => $id]);

        $device = $this->db->get('device')->row_array();
        $post = [
            'id_cctvl' => $id,
            'device_key' => $device['key_device']
        ];
        $url = 'http://rcctv.duckdns.org/rest-server/api/cctv';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

        $username = 'admin@admin.com';
        $password = 'singadepaa';
        curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);

        $result = curl_exec($ch);
        curl_close ($ch);
        echo $result;
    }

    public function countCamera()
    {
        $q = "SELECT `cctv`.*, COUNT(*) AS jmlc FROM `cctv`";
        return $this->db->query($q)->row_array();
    }
    public function countFilemanager()
    {
        $q = "SELECT `filemanager`.*, COUNT(*) AS jmlf FROM `filemanager`";
        return $this->db->query($q)->row_array();
    }

    public function editCamera()
    {
        $device = $this->db->get('device')->row_array();
        $id = $this->input->post('id');
        $ctv = $this->db->get_where('cctv', array('id' => $id))->row_array();
        $status = $ctv['status'];
        $data = [
            'device_id' => 1,
			'name' => $this->input->post('name'),
			'ipaddress' => $this->input->post('ipaddress'),
			'url_capture' => $this->input->post('urlcapture'),
			'user_cctv' => $this->input->post('user'),
			'pass_cctv' => $this->input->post('password'),
			'file_location' => $this->input->post('filelocation'),
			'status' => $status,
			'vendor' => $this->input->post('vendor'),
			'url_stream' => $this->input->post('urlstream')
			
            ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('cctv', $data);

        $id = $this->input->post('id');
        $ctv = $this->db->get_where('cctv', array('id' => $id))->row_array();
        $status = $ctv['status'];

        $url = 'http://rcctv.duckdns.org/rest-server/api/cctv';
        $post = [
            'id_cctvl' => $this->input->post('id'),
            'name_cctv' => $this->input->post('name'),
            'device_key' => $device['key_device'],
            'url_capture' => $this->input->post('urlcapture'),
            'url_stream' =>$this->input->post('urlstream'),
            'status' => $status,
            'vendor' => $this->input->post('vendor')
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

        
    }
}