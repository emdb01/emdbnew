<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MenuController extends CI_Controller {
    public function getMenu() {
        $menu = array('Dashboard' => array('text' => 'Dashboard', 'sref' => 'app.dashboard', 'icon' => 'dashboard','status'=>'active'),
                      'Trainings' => array('text' => 'Trainings', 'sref' => 'app.dashboard', 'icon' => 'fa fa-mortar-board',
                       'submenu' => array(array('text' => 'Trainings List', 'sref' => 'app.dashboard','status'=>''),
                                           array('text' => 'Materials', 'sref' => 'app.dashboard','status'=>''),
					   array('text' => 'Trainees', 'sref' => 'app.dashboard','status'=>''),
					   array('text' => 'Reports', 'sref' => 'app.dashboard','status'=>''),
                        )));
        
        echo json_encode($menu);
    }
}
