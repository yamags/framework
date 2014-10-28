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
		function getContent(){
				$this->view->generate($this ->_controllername,$this->_content, $this->_data);
		}
		function action_index() {
				
		}
		
}

