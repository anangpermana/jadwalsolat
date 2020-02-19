<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motion_model extends CI_Model
{
    public function getMotion() 
    {


    $mailbox = '{raspberrypi.com:143/notls}';
	$username = 'hikvision';
	$password = 'singadepa';
	$inbox = imap_open($mailbox, $username, $password);
	if($inbox === false){
		throw new Exception(imap_last_error());
	}
	$search = 'SINCE "' . date("j F Y", strtotime("-7 days")) . '"';
	$emails = imap_search($inbox, $search);
	
	if($emails) {
		$count = 1;
		rsort($emails);
		foreach($emails as $email_number) 
		{
	
			$overview = imap_fetch_overview($inbox,$email_number,0);
			$message = imap_fetchbody($inbox,$email_number,2);
            $structure = imap_fetchstructure($inbox, $email_number);
            $header = imap_fetchheader($inbox, $email_number);
            
            //var_dump($header); die;
			$attachments = array();
			
			$subject = $overview[0]->subject;
			$msgno = $overview[0]->msgno;
			
            //echo "$msgno $subject\r\n";
            $motion="$msgno $subject";
            $motion = explode(":", $motion);
            //var_dump($motion[2]); die;

            
            /* if any attachments found... */
				if(isset($structure->parts) && count($structure->parts)) 
				{
					for($i = 0; $i < count($structure->parts); $i++) 
					{
						$attachments[$i] = array(
							'is_attachment' => false,
							'filename' => '',
							'name' => '',
							'attachment' => ''
						);
		
						if($structure->parts[$i]->ifdparameters) 
						{
							foreach($structure->parts[$i]->dparameters as $object) 
							{
								if(strtolower($object->attribute) == 'filename') 
								{
									$attachments[$i]['is_attachment'] = true;
									$attachments[$i]['filename'] = $object->value;
								}
							}
						}
		
						if($structure->parts[$i]->ifparameters) 
						{
							foreach($structure->parts[$i]->parameters as $object) 
							{
								if(strtolower($object->attribute) == 'name') 
								{
									$attachments[$i]['is_attachment'] = true;
									$attachments[$i]['name'] = $object->value;
								}
							}
						}
		
						if($attachments[$i]['is_attachment']) 
						{
							$attachments[$i]['attachment'] = imap_fetchbody($inbox, $email_number, $i+1);
		
							/* 3 = BASE64 encoding */
							if($structure->parts[$i]->encoding == 3) 
							{ 
								$attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
							}
							/* 4 = QUOTED-PRINTABLE encoding */
							elseif($structure->parts[$i]->encoding == 4) 
							{ 
								$attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
							}
						}
					}
				}
		
				/* iterate through each attachment and save it */
				
				$a = 0;
				foreach($attachments as $attachment)
				{
					
					if($attachment['is_attachment'] == 1)
					{
						$filename = $attachment['name'];
						
						$filename = date("Ymdhis"). "-$filename";
						
						$folder = date("dmY");
						if(!is_dir("/tmp/motion/".$folder))
						{
						mkdir("/tmp/motion/".$folder);
						}
						$fp = fopen("/tmp/motion/". $folder ."/". $filename, "w+");
						fwrite($fp, $attachment['attachment']);
						fclose($fp);
                        
                        if($a=="1")
						{
							$filename1 = $filename;
							
						}
						if($a=="2")
						{
							$filename2 = $filename;
						}
						if($a=="3")
						{
							$filename3 = $filename;
                        }
                    }
                    $a++;
                }

                $device = $this->db->get('device')->row_array();
				$datemotion = date("Y-m-d H:i:s");
				$this->db->insert('motion',['date'=>$datemotion]);
				$idmotion = $this->db->limit(1)->order_by('id DESC')->get('motion')->row_array();
                $file1 = curl_file_create("/tmp/motion/$folder/$filename1",'image/jpg',$filename1);
				$file2 = curl_file_create("/tmp/motion/$folder/$filename2",'image/jpg',$filename2); 
				$file3 = curl_file_create("/tmp/motion/$folder/$filename3",'image/jpg',$filename3); 
				
                $post = array("idmotion"=>$idmotion['id'],"camera"=>$motion[1],"type"=>$motion[2],"device_key"=>$device['key_device'],"date"=>$datemotion, "status"=>1,'file0'=>$file1,'file1'=>$file2,'file2'=>$file3);
                
                //var_dump($post);die;
                
                $url = 'http://rcctv.duckdns.org/rest-server/api/motion';
        
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
                
            imap_delete($inbox,$email_number);

        }
        
	} 
	
	imap_expunge ($inbox);
	/* close the connection */
    imap_close($inbox,CL_EXPUNGE);
	
	sleep(2);
	
    echo "..";
    
    }
}