<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
        $this->load->model('M_user');
        $this->load->view('V_login');
        if($this->input->post('submit')){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $do_login = $this->M_user->loginUser($username,$password,1);
            if(count($do_login) == 0){
                $this->session->set_flashdata('login', 'gagal');
                redirect('login');
            }
            else{
				$data = $this->M_user->getUser($username,1);
	            $this->session->set_userdata('admin',$data);
                redirect('admin');
            }
        }
        elseif($this->session->userdata('admin')){
            redirect('admin');
        }
	}
	public function logout(){
		$this->session->unset_userdata('admin');
		redirect('login');
	}
}
