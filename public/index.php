  <?php 

  try{
  	  
  	  // Autoloader
	  $loader = new \phalcon\loader();
	  $loader->registerDirs([
	  	'../app/controllers/',
	  	'../app/models/'
	  ]);
	  $loader->register();

	  //Dependency Injection
	  $di = new \Phalcon\DI\FactoryDefault();
	  $di->set('view', function(){
	  	 $view= new \Phalcon\Mvc\View();
	  	 $view->setViewsDir('../app/views');
	  	 return $view;
	  });

	  //Deploy application

	  $app = new \Phalcon\Mvc\Application($di);
	  echo $app->handle()->getContent();

  } catch(\Phalcon\Exception $e){
  	   echo $e->getMessage();
  }

  ?>