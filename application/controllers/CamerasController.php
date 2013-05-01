<?php

class CamerasController extends My_Controller {

    public function init(){
        parent::init();
    }

    public function indexAction(){
        $this->view->title .= ' | Cameras';
    }
    
    public function sonyPmwf5Action(){
    	$this->view->title .= ' | Cameras | Sony PMWF5';
    }
    
    public function alexaPlusAction(){
    	$this->view->title .= ' | Cameras | Alexa Plus';
    }

}
