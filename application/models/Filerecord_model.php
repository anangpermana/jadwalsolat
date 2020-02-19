<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filerecord_model extends CI_Model
{
    public function getFileRecord()
    {

        $dctv= $this->db->get('cctv')->result_array();
        $device= $this->db->get('device')->row_array();
        foreach ($dctv as $dc){
            $dir = $dc['file_location'];
            $mp = directory_map ($dir);
            if(count($mp) > 0 ){
                foreach ($mp as $folder => $files){
                    foreach($files as $file){
                        if (preg_match("/.mp4/i",$file) && !preg_match("/_prev.mp4/i",$file)){
                            $createdate = filectime("$dir/$folder$file");
                            $createdate = date ("Y-m-d H:i:s", $createdate);
                            $update_date = filemtime("$dir/$folder$file");
                            $update_date = date("Y-m-d H:i:s", $update_date);

                            $filesize = filesize("$dir/$folder$file");

                            if ($filesize > 1000000){
                                $cek = $this->db->where([
                                    'cctv_id'=>$dc['id'],
                                    'file_name'=>$file,
                                    'file_location'=>"$dir"
                                ])->get('filemanager')->num_rows();
                                if($cek < 1){
                                    $lokasi = "$dir/$folder";
                                    $hsl=$this->db->insert('filemanager',[
                                        'cctv_id'=>$dc['id'],
                                        'cctv_name'=>$dc['name'],
                                        'file_name'=>$file,
                                        'file_location'=>$lokasi,
                                        'date'=>$createdate,
                                        'update_date'=>$update_date,
                                        'size'=>$filesize
                                    ]);
                                    if($hsl){
                                        $prevfile = str_replace(".mp4","_prev.mp4",$file);
                                        shell_exec("ffmpeg -i $dir/$folder$file -acodec copy -vcodec copy -movflags faststart $dir/$folder$prevfile");
                                        //shell_exec("ffmpeg -i $dir/$folder$file -ss 00:00:01 -t 00:00:59 -async 1 $dir/$folder$prevfile");
                                        $url = 'http://rcctv.duckdns.org/rest-server/api/filerecord';
                                        $lokasifile = "$dir/$folder";
                                        $post = [
                                            'cctv_id'=>$dc['id'],
                                            'cctv_name'=>$dc['name'],
                                            'device_key'=>$device['key_device'],
                                            'file_name'=>$file,
                                            'fileprev'=>$prevfile,
                                            'file_location'=>$lokasifile,
                                            'date'=>$createdate,
                                            'update_date'=>$update_date,
                                            'size'=>$filesize
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

                                    //    //postto langit
                                    //     $this->curl->create('http://rcctv.duckdns.org/rest-server/api/filerecord/id');
                                    //     //login ke api
                                    //     //$this->curl->http_login('admin', 'singadepa');
                                    //     $this->curl->post([
                                    //         'cctv_id'=>$dc['id'],
                                    //         'cctv_name'=>$dc['name'],
                                    //         'device_key'=>$device['key_device'],
                                    //         'file_name'=>$file,
                                    //         'file_location'=>$dir,
                                    //         'date'=>$createdate,
                                    //         'update_date'=>$update_date,
                                    //         'size'=>$filesize
                                    //     ]);
                                        
                                    //     $result = json_decode($this->curl->execute());

                                    //     if(isset($result->status) && $result->status == 'success'){
                                    //         echo 'filerecord updated';
                                    //     } else {
                                    //         echo 'somthing wrong';
                                    //     }
                                    
                                    // $this->load->library('rest',[
                                    //     'server' => 'http://rcctv.duckdns.org/rest-server/api/filerecord/'
                                    // ]);
                                    // $this->rest->post('', [
                                    //     'cctv_id'=>$dc['id'],
                                    //     'cctv_name'=>$dc['name'],
                                    //     'device_key'=>$device['key_device'],
                                    //     'file_name'=>$file,
                                    //     'file_location'=>$dir,
                                    //     'date'=>$createdate,
                                    //     'update_date'=>$update_date,
                                    //     'size'=>$filesize
                                    // ]);


                                    }
                                }
                            }
                        }
                    }
                }
            }

            
        }
        // var_dump($update_date);

    }

    public function getFileRecordRow($id)
    {
        $query = "SELECT `cctv`.`id`, `cctv`.`name`, `cctv`.`ipaddress`, `filemanager`.*  FROM `cctv` JOIN `filemanager` ON `cctv`.`id` = `filemanager`.`cctv_id` WHERE `filemanager`.`cctv_id` = $id";
        return $this->db->query($query)->result_array();
        // return $this->db->get_where('filemanager', ['cctv_id' => $id])->result_array();
    }

    public function cekCctv()
    {
        $device= $this->db->get('device')->row_array();
        $dctv= $this->db->get('cctv')->result_array();
        foreach ($dctv as $dc ) {
            $date = date("H:i:s");
            $ip = $dc['ipaddress'];
            $url = "http://$ip";
            $ch = curl_init($url);

            curl_setopt($ch, CURLOPT_NOBODY, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 5);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_exec($ch);
            $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($retcode == 200) {
                $this->db->set('status', $retcode);
                $this->db->set('last_cek', $date);
                $this->db->where('id', $dc['id']);
                $this->db->update('cctv');

                $res = $this->db->affected_rows();
            $post = [
                'id' => $dc['id'],
                'key_device' => $device['key_device'],
                'status' => $retcode,
                'last_cek' => $date
            ];
            var_dump($post);

            $url = 'http://rcctv.duckdns.org/rest-server/api/filerecord/cctv';
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
                $this->db->set('status', 0);
                $this->db->set('last_cek', $date);
                $this->db->where('id', $dc['id']);
                $this->db->update('cctv');
                
            $post = [
                'id' => $dc['id'],
                'key_device' => $device['key_device'],
                'status' => 0,
                'last_cek' => $date
            ];
            var_dump($post);

            $url = 'http://rcctv.duckdns.org/rest-server/api/filerecord/cctv';
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
            
            // echo "$retcode $date $url..\n";


        }
    }
}