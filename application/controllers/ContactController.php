<?php

class ContactController extends My_Controller {

    public function init(){
        parent::init();
    }

    public function indexAction(){
    	$this->view->title .= ' | Contact';
    }

    public function inquireAction(){
    	if( $this->isPost() ){
    		$params = $this->params();
    		$required = array('name','email','phone','message');
    		
    		$error = false;
    		foreach($required as $req){
				if( !array_key_exists($req, $params) ){
					$errror = true;
					$cause[] = 'Field Requierd: ' . $req;
				}elseif( $req == 'email'){
					if( !$this->isEmail($params['email']) ){
						$error = true;
						$cause[] = 'Invalid email address';
					}
				}elseif( strlen($params[$req]) < 1 ){
					$error = true;
					$cause[] = 'Field is blank: ' . $req;
				}	 
    		}
    		
    		if($error){
    			$this->json( array('cause'=>$cause), 400, 'error' );
    		}else{
    			foreach($params as $key=>$val){
    				$body .= $key . ':' . $val . '<br>';
    			}
    			
    			Jien::mail($params['email'],'info@newyorkcitycamera.com',$body, $body);
    			
    			$this->json( 'sent', 200, 'success' );
    		}
    	}
    }
}
