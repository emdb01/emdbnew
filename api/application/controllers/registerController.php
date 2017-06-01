<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//class RegisterController extends REST_Controller {
class RegisterController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }

    public function login() {
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|max_length[256]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[256]');
        $this->form_validation->set_rules('who', 'Who are you?', 'required');
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
        $this->form_validation->set_rules('who', 'Who are you?', 'required');
        return Validation::validate($this, '', '', function($token, $output) {
                    $email = $this->input->post('email');
                    $check = $this->Register->mail_exists($email);
                    if ($check) {
                        $whoareyou = $this->input->post('who');
                        $country = $this->input->post('country');
                        $password = $this->Register->create($email, $whoareyou, $country);

                        /*$from_email = "sekhar@employeemasterdatabase.com";
                        $to_email = $email;

                        $this->email->from($from_email, 'Emloyee Master Database');
                        $this->email->to($to_email);
                        $this->email->subject('Welcome to Employee Master Database');
                        $message = 'Hi &#13;';
                        $message .='&#13;';
                        $message .='These below are the your email id and a temporary password to login to Employee Master Database. &#13;';
                        $message .='Email : ' . $to_email . '&#13;';
                        $message .='Temporary Password : ' . $password . '&#13;';
                        $message .='&#13;';
                        $message .='Thanks' . '&#13;';
                        $message .='EMDB Team' . '&#13;';
                        $messageTemplate = html_entity_decode($message);
                        $this->email->message(html_entity_decode($messageTemplate));
                        $this->email->send();

                        foreach ($this->email->get_debugger_messages() as $debugger_message)
                            echo $debugger_message;*/


                        $output['status'] = true;
                        return $output;
                    } else {
                        $output['status'] = false;
                        $output['errors'] = '{"type": "exists"}';

                        return $output;
                    }
                });
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

    public function getCountries() {
//        $this->load->model('Country');
        $countries = $this->Country->read();
        echo json_encode($countries);
    }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */