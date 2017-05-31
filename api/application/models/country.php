<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Country extends CI_Model {

    public function read() {
        
        $this->db->select('*');
        $this->db->from('countries');

        $query = $this->db->get();
        $results = $query->result();
        $countries = array();
        foreach ($results as $result) {
            $country = new stdClass();
            $country->id = $result->idcountry;
            $country->code = $result->countrycode;
            $country->name = $result->countryname;
            $countries[] = $country;
        }

        return $countries;
    }

}
