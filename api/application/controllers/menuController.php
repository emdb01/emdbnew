<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MenuController extends CI_Controller {
    public function getMenu() {
        $menu = array('Dashboard' => array('text' => 'Dashboard', 'sref' => 'app.dashboard', 'icon' => 'dashboard'),
                      'Trainings' => array('text' => 'Trainings', 'sref' => '#', 'icon' => 'fa fa-mortar-board',
                       'submenu' => array(array('text' => 'Trainings List', 'sref' => 'app.dashboard'),
                                           array('text' => 'Materials', 'sref' => 'app.dashboard'),
					   array('text' => 'Trainees', 'sref' => 'app.dashboard'),
					   array('text' => 'Reports', 'sref' => 'app.dashboard'),
                        )));
        
        echo json_encode($menu);
    }
}
