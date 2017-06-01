<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Model {

    public function create($email, $whoareyou, $country) {
        $tm = time();
        $hashedPassword = Password::create_hash($tm);
        $data = array(
            'who' => $whoareyou,
            'country' => $country['name'],
            'email' => $email,
            'temp_password' => $hashedPassword,
        );
     
        $this->db->insert('register', $data);
        return $tm;
    }
    
    public function mail_exists($key) {
        $this->db->select('*');
        $this->db->where('email', $key);
        $query = $this->db->get('register');
        $result=$query->result();
        if (count($result) > 0) {
            return false;
        } else {
            return true;
        }
    }

}
