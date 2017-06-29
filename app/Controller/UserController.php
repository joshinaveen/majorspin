<?php

App::uses('AppController','Controller');
class UserController extends AppController{

	public $name = 'user';
	public $uses = array();
	
	function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow(array('index'));
	}
	
	public function index(){
		$this->layout = 'default';
	}
	
	public function login(){
		//$this->layout = false;
	}
	
	function admin_dashboard(){
		$this->layout = 'admin';
	}
	
	public function admin_about_us(){
		$this->layout = 'admin';
		
	}
	
}

?>