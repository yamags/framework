<?php
class Controller {
		public $model;
		public $view;
		public $template='main';
		private $_content;
		private $_data;
		private $_controllername;
		function __construct($name) {
				$this -> view = new View();
				$this ->_controllername =$name;
				
		}
		function render($content, $data=null){
				$this->_content=$content;
				$this->_data=$data;
				include 'app/views/' . $this->template. '.php';
				
		}
		function redirect($url){
				$request = explode('/', $url); 
				$controller = Config::getConfig('defaultControllerName'); 
				$action = Config::getConfig('defaultActionName'); 
				if (!empty($request[0])) { 
						 $controller = $request[0]; 
						 
				} 
				if (!empty($request[1])) {
						 $action = $request[1];
						 
				}
				$controller = 'Cntr_' . $controller;
				if($this->_controllername!=strtolower($controller)){
				$Controllerfile = strtolower($controller) . '.php';
				$ControllerPath = "app/controllers/" . $Controllerfile;
				if (file_exists($ControllerPath)) {
					
						include $ControllerPath;
						
				} else { 
						echo 'Eroor 404:'.$Controllerfile.' do not exist';
						return 0;
				}
				$controllerclass = new $controller(strtolower($controller));
				}
				else{
				$controllerclass=$this;
				}
				if (method_exists($controllerclass, $action)) {
						call_user_func(array($controllerclass, $action), $request);
						
				}
				else {
						echo 'Eroor 404:'.$Controllerfile.'/'.$action.' do not exist';
				}  
		}
		function getContent(){
				$this->view->generate($this ->_controllername,$this->_content, $this->_data);
		}
		function action_index() {
				
		}
		
}

