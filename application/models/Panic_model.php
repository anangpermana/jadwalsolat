<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panic_model extends CI_Model
{
    public function getPanic()
    {
        $datactv = $this->db->get('cctv')->result_array();
        $lokasi = "/tmp/panic/".date("dmY");
        if(!is_dir($lokasi)) mkdir($lokasi);
        $audioname = "audio-".date("dmYhis").".ogg";
        shell_exec("arecord -d 10 -f cd -t raw | oggenc - -r -o $lokasi/$audioname");
        foreach ($datactv as $dctv){
            $cameraname = $dctv['name'];
            $ipaddress = $dctv['ipaddress'];
            $user = $dctv['user_cctv'];
            $pass = $dctv['pass_cctv'];
            $urlcapture = $dctv['url_capture'];

            for ($i=0; $i<3; $i++)
            {
                $capturename = $cameraname.'-'.date("dmYhis").'.jpg';

            //shell_exec("wget -O $lokasi/$capturename --user=$user --password=$pass http://$ipaddress$urlcapture");
            $cmd = "wget -O $lokasi/$capturename --user=$user --password=$pass http://$ipaddress$urlcapture";

            $capture [] = array("image" => "$lokasi/$capturename");

            system($cmd);
            echo "....";

            sleep(5);
            }
        }

        $file = array();
        $datepanic = date("Y-m-d H:i:s");
        $jmlimage = count($capture);
        $this->db->insert('panic',['date'=>$datepanic]);
        //$idpanic = $this->db->get('panic')->result_array();
        $idpanic = $this->db->limit(1)->order_by('id DESC')->get('panic')->row_array();
        //var_dump($idpanic['id']); die;
        $device = $this->db->get('device')->row_array();
        $jml = array ("jmlimage"=>$jmlimage, "device_key"=>$device['key_device'], "date"=>$datepanic, "idpanic"=>$idpanic['id'], "status"=>1);
        for ($i=0; $i<$jmlimage; $i++)
        {
            $filename = $capture[$i]['image'];
            $namafile = str_replace("$lokasi/", "", $filename);

            $file1 = curl_file_create($capture[$i]['image'], "image/jpg", "$namafile");
            $file = array("file$i" =>$file1);
             
            $jml = array_merge($jml, $file);

            
            
        }
        $post=$jml;
       
        $fileaudio = curl_file_create($lokasi.'/'.$audioname, "application/ogg", $audioname);

        $post['audio'] = $fileaudio;
        // var_dump($post);
        // die;
        //var_dump($post); die;

        $url = 'http://rcctv.duckdns.org/rest-server/api/panic';
        
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