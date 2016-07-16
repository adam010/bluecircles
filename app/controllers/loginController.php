<?php 

class LoginController extends \Phalcon\Mvc\Controller{

   public function initialize(){
   	echo "*** Init";
   }
   public function indexAction()
   {

   		echo "login!";

   }	
   public function processAction($username = false, $age =12){
   	  echo "Processing";
   	  echo $username;
   	  echo $age;
        $this->view->setVar('username','username');
        $this->view->setVar('username','username');
   }
  
}

