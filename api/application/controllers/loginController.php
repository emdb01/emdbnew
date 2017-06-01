<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LoginController extends REST_Controller {
    public function login() {
       
        $this->form_validation->set_rules('username', 'Email or Emdb Id', 'required|max_length[256]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[256]');
        $this->form_validation->set_rules('role', 'Role', 'required');
        return Validation::validate($this, '', '', function($token, $output) {
                    $email = $this->input->post('username');
                    $password = $this->input->post('password');
                    $role = $this->input->post('role');
                    /*$id = $this->User->login($email, $password);
                    if ($id != false) {
                        $token = array();
                        $token['id'] = $id;
                        $output['status'] = true;
                        $output['email'] = $email;
                        $output['token'] = JWT::encode($token, $this->config->item('jwt_key'));
                    } else {
                        $output['errors'] = '{"type": "invalid"}';
                    }
                    return $output;*/
                });
    }
}
