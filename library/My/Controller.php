<?php

class My_Controller extends Jien_Controller {

    public function init(){
    	parent::init();

    	// if it doesn't exist, it will use the default
    	$theme = THEME;
    	$this->view->addScriptPath(APPLICATION_PATH.'/views/'.$theme.'/');
    	$this->layout('site');

    	// set title
    	$this->view->title = TITLE;

    }
    
	public function isPost(){
    	if( $this->_request->getMethod() == "POST" ){
    		return true;
    	}else{
    		return false;
    	}
    }
	
    public function isEmail($email){
    	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    		return true;
    	}else{
    		return false;
    	}
    }
}