<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array('Auth','Session','Email');
	
	
	public function beforeFilter(){  
	$admin=Configure::read('Routing.prefixes');
	if(!empty($this->params[$admin[0]])) {   
	/*--auth configration for admin user--*/  		
		
                $this->Auth->loginAction = array('controller'=>'login','action'=>'admin_login','admin'=>true);
                $this->Auth->loginRedirect=array('controller'=>'user','action'=>'admin_dashboard','admin'=>true); 
                $this->Auth->logoutRedirect = array('controller'=>'login','action'=>'admin_login','admin'=>true);
                $this->Auth->authenticate = array(
			    'Form' => array(
				'userModel' => 'User',
				'fields' => array('username' => 'email','password' => 'password'),
			
			 )
		 ); 
                
                
                
		//$this->Auth->authorize = array('Controller');
		/*--auth configration for admin user--*/
  		}else{				
			$this->Auth->loginRedirect=array('controller'=>'users','action'=>'profile','admin' => false);
			$this->Auth->logoutRedirect=array('controller'=>'users','action'=>'login','admin' => false);
			$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login','admin' => false);       
			$this->Auth->authError='Session expire!.Please login.';
			$this->Auth->authenticate = array(
				'Form' => array(
					'userModel' => 'Login',
					'fields' => array('username' => 'email','password' => 'password'),
					'scope' => array('user_status' =>'Activated')
				 )
			 ); 		         			
			$this->Auth->authorize = array('Controller');	       					
  		}
  	}
	
	public function beforeRender(){ 

		ini_set('memory_limit', '7500M');
	   	$this->set('loggedIn', $this->Auth->loggedIn());
   		$this->set('loggedUser', $this->Auth->user()); 
		
          		
  	} 	
   	
		
    
     function sendEmail($to,$from,$subject,$content='',$template='general'){
		try{
		  
			$this->Email->smtpOptions = array(
					'port'=>'587',
					'timeout'=>'30',
					'host' => 'smtp.sendgrid.net',
					'username'=>'lcdhakar87',
					'password'=>'iws123#*today',
					'client' => 'flipbites.com'
			); 
			$this->Email->from=$from;
			$this->Email->to=$to;
		 	$this->Email->subject=$subject;
			$this->Email->sendAs='both';
		    $this->Email->delivery = 'smtp';
			
			if($this->Email->send($content)){
				return true;
               
			}
			
		}catch(Exception $e){
		  // print_r($e);
		   return false;
          
		} 
	  	return false;
	  	die;
    }
  
}
