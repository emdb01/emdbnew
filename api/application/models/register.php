<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Model {

    public function create($email, $whoareyou, $country) {
;
        $data = array(
            'who' => $whoareyou,
            'country' => $country['name'],
            'email' => $email,
        );
        $countryname=$country['name'];
        $this->db->insert('register', $data);
    }

}
