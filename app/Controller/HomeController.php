<?php

App::uses('AppController','Controller');
class HomeController extends AppController{

	public $name = 'home';
	public $uses = array();
	
	function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow(array('index','admin_about_us'));
	}
	
	public function index(){
		$this->layout = 'default';
	}
	
	public function admin_about_us(){
		
		
	}
	
}

?>     