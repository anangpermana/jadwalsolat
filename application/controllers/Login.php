<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function index ()
    {
        if ($this->session->userdata('username')) {
            redirect ('admin');
        }
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('userpassword', 'Userpassword', 'required|trim');
        
        if($this->form_validation->run () == false) {
            $data['title'] = "Login Page";
            $this->load->view('login/index', $data);

        }else{

            $this->_login();
        }
    }

    private function _login() 
    {
        //ambil data dari form login
        $username = $this->input->post('username');
        $userpassword = $this->input->post('userpassword');

        //query user di database
        $user = $this->db->get_where('user', ['name' => $username])->row_array();
        
        //jika usernya ada

        if($user) {
            //cek password
            if (password_verify($userpassword, $user['password'])){
                $data = [
                    'username' => $user['name']
                ];
                $this->session->set_userdata($data);
                redirect ('admin');

            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Wrong password ! </div>');
                redirect ('login');
            }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Username not found ! </div>');
            redirect ('login');
        }
    }

    public function exit ()
    {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Yout have been logout ! </div>');
        redirect ('login');
    }


    public function forgotpassword()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if($this->form_validation->run() == false ) {

            $data['title'] = 'Forgot Password';
            $this->load->view('login/forgotpassword', $data);
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];
                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Please Cek Email </div>');
                redirect ('login/forgotpassword');

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registration </div>');
                redirect ('login/forgotpassword');
            }
        }
        
    }

    private function _sendEmail($token)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'dipantaumangosky@gmail.com',
            'smtp_pass' => 'singadepa',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];

        $this->load->library('email',$config);

        $this->email->from('dipantaumangosky@gmail.com', 'Device Dipantau Mangosky');
        $this->email->to($this->input->post('email'));
        $this->email->subject('Reset Password User Divice Dipantau Mangosky');
        //$this->email->message('testing forgot: <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '"> Reset Password</a>');
        $this->email->message('clik :<a href="'. base_url() . 'login/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset password</a>');

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }

    }

    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get('user',['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get('user_token', ['token' => $token])->row_array();
            if ($user_token) {
                
                $this->session->set_userdata('reset_email', $email);
                $this->changepassword();

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Reset password faild wrong token </div>');
            redirect ('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Reset password faild wrong email </div>');
            redirect ('login');
        }
    }

    public function changepassword()
    {

        if (!$this->session->userdata('reset_email')) {
            redirect ('login');
        }

        $this->form_validation->set_rules('pass1', 'New Password', 'trim|required|min_length[3]|matches[pass2]');
        $this->form_validation->set_rules('pass2', 'Confirm Password', 'trim|required|min_length[3]|matches[pass1]');

        if ($this->form_validation->run() == false ) {

            $data['title'] = 'Change Password';
            $this->load->view('login/changepassword', $data);
        } else {
            $password = password_hash($this->input->post('pass1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password has been change, please login </div>');
            redirect ('login');
        }
    }
}