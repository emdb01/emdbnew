<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Recruiter extends CI_Model {

    public function addRecruiter($email, $password, $firstName, $middleName, $lastName, $company, $phone, $country) {
        $now = date("Y-m-d");
        //time String
        $tm = time();

        date_default_timezone_set('Asia/Kolkata');
        $dateTime = date('Y-m-d H:i');
        $hashedPassword = Password::create_hash($password);
        $data = array(
            'first' => $firstName,
            'middle' => $middleName,
            'last' => $lastName,
            'company' => $company,
            'country' => $country['name'],
            'phone' => $phone,
            'email' => $email,
            'role' => 3,
            'status' => 2,
            'verify' => 2,
            'visits' => 0,
            'status_time' => $tm,
            'dateTime' => $dateTime,
//            'createdDate' => $now,
//            'modifiedDate' => $now,
            'pass' => $hashedPassword,
        );

        $this->db->insert('recruiter', $data);
        /*$this->db->set('first', $firstName);
        $this->db->set('middle', $middleName);
        $this->db->set('last', $lastName);
        $this->db->set('company', $company);
        $this->db->set('country', $country['name']);
        $this->db->set('phone', $phone);
        $this->db->set('email', $email);
        $this->db->set('role', 3);
        $this->db->set('status', 2);
        $this->db->set('verify', 2);
        $this->db->set('visits', 0);
        $this->db->set('status_time', $tm);
        $this->db->set('dateTime', $dateTime);
        $this->db->set('createdDate', $now);
        $this->db->set('modifiedDate', $now);
        $this->db->set('pass', Password::create_hash($password));
        $this->db->insert('recruiter');*/
        return $this->db->insert_id();
    }

    public function read() {
        $this->db->select('*');
        $this->db->from('recruiter');
        $this->db->where('status', '1');
        $query = $this->db->get();
        $results = $query->result();
        $recruiters = array();

        foreach ($results as $result) {
            $recruiter = new stdClass();
            $recruiter->id = $result->user_id;
            $recruiter->name = $result->first;
            $recruiter->email = $result->email;
            $recruiters[] = $recruiter;
        }
        return $recruiters;
    }

}
