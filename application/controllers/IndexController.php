<?php

class IndexController extends My_Controller {

    public function init(){
        parent::init();
    }

    public function indexAction(){
    	$this->view->title .= ' | Home';
    }

}
