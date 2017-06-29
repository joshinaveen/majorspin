<?php

/**
 * Name : CMS Controller
 * Created : 21st July 2016
 * Purpose : Default CMS controller
 * Author : Naveen joshi
 */ 
class CmsController extends AppController
{
	public $name = 'Cms';
	public $uses = array('Cms');
	
	public $paginate = array ('limit' => 10);		
	public $layout='admin';	
	public function beforeFilter()
	{       $this->Auth->allow( array('cms_page','contact_us'));
		parent::beforeFilter();
	}	
			
	/**
	 * Name : Index
	 * Purpose : Default index function for CMS Pages. Display  CMS page listing and other filters
	 * Created : 21st July 2016
	 * Author : Naveen joshi
	 */ 
	public function admin_index()
	{	
		if(isset($this->request->data['option']) && !empty($this->request->data['option']))
		{
			if(!empty($this->request->data['ids']))
			{
				switch($this->request->data['option'])
				{
					case "delete":
						$this->Cms->deleteAll(array('id' => $this->request->data['ids']));
						$this->Session->setFlash(__('Selected users deleted sucessfully'));
					break;
					case "active":
						$this->Cms->updateAll(array('status' => "'active'"), array('id' =>  $this->request->data['ids'] ));
					break;
					case "deactive":
						$this->Cms->updateAll(array('status' => "'inactive'"), array('id' =>  $this->request->data['ids'] ));
					break;
				}
			}
		}
	
		//This section handles search
		if(isset($_GET['filter']))
		{
			$this->paginate = array(		
					'limit' => 10,
					'conditions' => array('Cms.'.$_GET['filter'].' Like ' => $_GET['search_keyword'].'%'),					
					);			
			
		}				
		$cms = $this->paginate('Cms');
		$this->set('cms', $cms);		
	}
		
	/**
	 * Name : admin_add
	 * Purpose : to add cms content
	 * Created : 25th July 2016
	 * Author : Naveen joshi
	 */ 
	public function admin_add() 
	{
		if ($this->request->is('post')) 
		{
			$this->Cms->create();			
			if ($this->Cms->save($this->request->data)) 
			{
				$this->Session->setFlash(__('The Cms has been saved'));
				$this->redirect(array('action' => 'index'));
			} 
			else 
			{
				$this->Session->setFlash(__('The Cms could not be saved. Please, try again.'));
			}
		}
                  $this->set('page', 'Add Content');
	}
	
/**
	 * Name : admin_edit
	 * Purpose : CMS content edit section
	 * Created : 25st July 2016
	 * Author : Naveen joshi
	 */ 
        public function admin_edit($id = null) {
            
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->Cms->id = $id;
                $this->Cms->save($this->data);
                $this->Session->setFlash(__('Cms page is saved'));
                $this->redirect(array('action' => 'index'));
            }
            $options = array('conditions' => array('Cms.' . $this->Cms->primaryKey => $id));
            $this->request->data = $this->Cms->find('first', $options);

            $this->set('page', 'Edit Content');
            $this->render('admin_add');
        }

     
/**
	 * Name : cms_page
	 * Purpose : CMS content for front end
	 * Created : 25st July 2016
	 * Author : Naveen joshi
	 */ 
  
      public function cms_page(){
	 $slug=$this->params->url;
         if($slug){
            $content=$this->Cms->findByUrlKey($slug);
            $this->set('Content',$content);
         }
      }


/**
	 * Name : contact_us
	 * Purpose : Contact us form
	 * Created : 25st July 2016
	 * Author : Naveen joshi
	 */ 

     public function contact_us(){
         $content=$this->Cms->findByUrlKey('get-in-touch');
         $this->set('Content',$content);
        
      }
      

    }

?>
