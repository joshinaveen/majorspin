<?php

App::uses('AppController','Controller');
class UsersController extends AppController{

	public $name = 'users';
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
	
}

?>