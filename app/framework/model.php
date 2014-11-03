<?php

class Model {
		private $data;
		function __construct() {
			$this->data=array();
		}
		public function getData() {
				print_r($this->data);
				return $this->data;
		}
		
}


