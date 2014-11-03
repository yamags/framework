<?php
class Rout {
		static function start() { 
				
				
				$controller = Config::getConfig('defaultControllerName'); 
				$action = Config::getConfig('defaultActionName'); 
				$request = explode('/', $_SERVER['REQUEST_URI']); 
				if (!empty($request[1])) { 
						 $controller = $request[1]; 
						 
				} 
				if (!empty($request[2])) {
						 $action = $request[2];
						 
				}
				//$model =  $controller;
				$controller = 'Cntr_' . $controller;
				//$action =  $action;
				/*$Modelfile = strtolower($model) . '.php';
				$ModelPath = "app/models/" . $Modelfile;
				if (file_exists($ModelPath)) {
						include $ModelPath;
						
						
				}*/
				$Controllerfile = strtolower($controller) . '.php';
				$ControllerPath = "app/controllers/" . $Controllerfile;
				if (file_exists($ControllerPath)) {
						include $ControllerPath;
						
				} else { 
						echo 'Eroor 404:'.$Controllerfile.' do not exist';
						return 0;
				}
				$controllerclass = new $controller(strtolower($controller));
				if (method_exists($controllerclass, $action)) {
						call_user_func(array($controllerclass, $action), $request);
						
				}
				else {
						echo 'Eroor 404:'.$Controllerfile.'/'.$action.' do not exist';
				}  
				
		}
}

