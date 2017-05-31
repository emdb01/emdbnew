<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class RecruiterController extends REST_Controller {

    public function getRecruitersList() {
        $recruiterList = $this->Recruiter->read();
        echo json_encode($recruiterList);
    }

}
