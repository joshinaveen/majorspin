<?php

App::uses('AppController','Controller');
class LoginsController extends AppController{

	public $name = 'login';
	public $uses = array();
	
	public function index(){
		$this->layout = 'default';
	}
	
	public function login(){
		
	}
	
}

?>