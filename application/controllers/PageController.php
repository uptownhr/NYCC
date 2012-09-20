<?php

class PageController extends My_Controller {

    public function init(){
        parent::init();
    }

    public function indexAction(){
    }
    
    public function workAction(){
    	$this->view->title .= ' | Work';
    }
    
    public function alexaPlusAction(){
    	$this->view->title .= ' | Alexa Plus';
    }
    
    public function equipmentAction(){
    	$this->view->title .= ' | Equipment';
    }
    
    public function companyAction(){
    	$this->view->title .= ' | Contact';
    }

    public function __call($method, $args = array()){
    	$action = substr($method, 0, strlen($method)-6);

    	// check if page exists from CMS
    	$uri = $_SERVER['REQUEST_URI'];
    	$data = Jien::model("Page")->where("permalink = '{$uri}'")->get()->row();
    	$script = !empty($data['view_script']) ? $data['view_script'] : 'index';

    	switch($data['src']){
    		case 'html':
    			$this->view->content = $data['html'];
    		break;

    		case 'file':
    			$this->view->file = 'page/'.$action. '.phtml';
    		break;

    		case 'none':
    		break;
    	}
        return $this->render($script);
    }

}
