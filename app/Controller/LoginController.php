<?php

App::uses('AppController','Controller');
class LoginController extends AppController{

	public $name = 'login';
	public $helpers = array('Form','Html','Session');
	public $components=array('Auth');
	public $uses = array('User');
	
	public function beforeFilter()
	{       $this->Auth->allow( array('admin_login','admin_logout'));
		parent::beforeFilter();
	}	
	public function index(){
		$this->layout = 'default';
	}
	
	public function admin_login(){
		$this->layout = false;  
		
		if($this->request->is('post')){	
			 //echo $pass  = $this->Auth->password($this->request->data['User']['password']); die;
			if ($this->Auth->login()) {
				
                            /* --update access logs-- */
                            $this->User->validation = null;
                            $arrData = array('User' =>
                                array('last_login_ip' => $this->request->clientIp(),
                                    'last_login_date' => date('Y-m-d H:i:s')
                            ));
                            $this->User->id = $this->Auth->user('id');
                            $this->User->save($arrData, false);
                            $this->Session->setFlash(__('Successfully logged In !'),'default',array('class'=>'alert alert-success'));
                            $this->redirect($this->Auth->redirectUrl());
                        }else{
                                    $this->Session->setFlash(__('Invalid Username or Password, please try again'),'default',array('class'=>'alert alert-danger'));
                                    $this->redirect($this->Auth->logout());
                            }
		}		
		
		//echo '<pre>'; print_r($this->request->data); die;
	}
        
        
        function admin_logout(){
            $this->Auth->logout();
            $this->Session->setFlash(__('Successfully logged out !'),'default',array('class'=>'alert alert-success'));
            $this->redirect(array('action'=>'admin_login'));
        }
	
	
	
}

?>