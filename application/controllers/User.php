<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data['userd'] = $this->db->get('user')->row_array();
        $data ['title'] = "User";
        $this->load->view ('templates/header', $data);
        $this->load->view ('user/index');
        $this->load->view ('templates/footer');
    }
    public function editprofile()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data['userd'] = $this->db->get('user')->row_array();
        $data ['title'] = "Edit Profile";

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if($this->form_validation->run() == false) {

            
            $this->load->view ('templates/header', $data);
            $this->load->view ('user/edit');
            $this->load->view ('templates/footer');
        }else{

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $id = $this->input->post('id');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '4048';
                $config['upload_path'] = './assets/images/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image',$new_image);
                    
                } else{
                    echo $this->upload->display_errors();
                }
            }
            
            $this->db->set('email',$email);
            $this->db->set('name',$name);
            $this->db->where('id', $id);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Profile has been updated</div>');
            redirect ('user');

        }
    }
    public function changepassword()
    {
        $data ['title'] = "Change Password";
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('username')])->row_array();
        $data['userd'] = $this->db->get('user')->row_array();

        $this->form_validation->set_rules('current_pass', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('new_pass1', 'New Password', 'trim|required|min_length[4]|matches[new_pass2]');
        $this->form_validation->set_rules('new_pass2', 'Confirm Password', 'trim|required|min_length[4]|matches[new_pass1]');

        if ($this->form_validation->run() == false) {
            $this->load->view ('templates/header', $data);
            $this->load->view ('user/changepassword');
            $this->load->view ('templates/footer');
        } else {
            $new_password = $this->input->post('new_pass1');
            $current_pass = $this->input->post('current_pass');
            if (!password_verify($current_pass, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Current Password</div>');
                redirect ('user/changepassword');
            } else {
                if($current_pass == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> New password cannot same with current password</div>');
                    redirect ('user/changepassword');
                } else {
                    //pass ok

                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('name', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password Changed</div>');
                    redirect ('user/changepassword');
                }
            }
        }
    }

} 