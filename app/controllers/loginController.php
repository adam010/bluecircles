<?php 

class LoginController extends \Phalcon\Mvc\Controller{

   public function initialize(){
     
     $this->view->setTemplateAfter('default')
   }
   public function indexAction()
   {

   		echo "login!";

   }	
   public function processAction($username = false, $age =12){
 
        $this->view->setVar('username',$username);
        $this->view->setVar('age',$age);
        
        $this->view->disable();
   }
  
}

