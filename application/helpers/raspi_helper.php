<?php 

function get_email ()
{
        //instance library ci
    $ci = get_instance();

    $datacctv = $ci->db->get('cctv')->row_array();
    
    var_dump($datacctv);
}