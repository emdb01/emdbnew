<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//class RegisterController extends REST_Controller {
class RegisterController extends CI_Controller {
 
    public function login() {
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|max_length[256]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[256]');
        return Validation::validate($this, '', '', function($token, $output) {
                    $email = $this->input->post('email');
                    $password = $this->input->post('password');
                    $id = $this->User->login($email, $password);
                    if ($id != false) {
                        $token = array();
                        $token['id'] = $id;
                        $output['status'] = true;
                        $output['email'] = $email;
                        $output['token'] = JWT::encode($token, $this->config->item('jwt_key'));
                    } else {
                        $output['errors'] = '{"type": "invalid"}';
                    }
                    return $output;
                });
    }

    public function register() {
        
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|max_length[256]');
        return Validation::validate($this, '', '', function($token, $output) {
                    $email = $this->input->post('email');
                    $whoareyou = $this->input->post('who');
                    $country = $this->input->post('country');
                    $this->Register->create($email,$whoareyou,$country);
                    $output['status'] = true;
                    return $output;
                });
        /*$email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->User->register($email, $password);*/
    }

    public function permissions() {
        $this->form_validation->set_rules('resource', 'resource', 'required');
        return Validation::validate($this, 'user', 'read', function($token, $output) {
                    $resource = $this->input->post('resource');
                    $acl = new ACL();
                    $permissions = $acl->userPermissions($token->id, $resource);
                    $output['status'] = true;
                    $output['resource'] = $resource;
                    $output['permissions'] = $permissions;
                    return $output;
                });
    }
    
    public function getCountries(){
//        $this->load->model('Country');
        $countries =  $this->Country->read();
        echo json_encode($countries);
    }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */