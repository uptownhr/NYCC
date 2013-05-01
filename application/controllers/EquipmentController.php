<?php

class EquipmentController extends My_Controller {

    public function init(){
        parent::init();
    }

    public function indexAction(){
        $this->view->title .= ' | Equipment';
    }
    
    public function camerasAction(){
    	$this->view->title .= ' | Equipment | Cameras';
    }
    
    public function lensesAction(){
    	$this->view->title .= ' | Equipment | Lenses';
    }

    public function monitorsAction(){
        $this->view->title .= ' | Equipment | Monitors';
    }


}
