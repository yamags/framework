<?php
		
class arrayModel extends Model{
		public function getData() {
				//print_r($this->data);
				return $this->data;
		}		
		public function setData($param) {
				if(is_array($param)){
						$this->data=$param;
				}
				else{
						$this->data=array($param);
				}
				
		}
		public function addData($param){
				if(!isset($this->data)){
					$this->setData($param);
				}
				else{
					foreach($param as $key=>$value){
						$this->data[$key]=$value;
					}
				
				}
				
				
		}
		public function Search($request){
			$res=new arrayModel();
			
			foreach($this->data as $key=>$value){
				if(($key==$request)||($value==$request)){
				$res->addData(array($key=>$value));
				}
			}
			//print_r($this->getData());
			return $res;
		}
	
}
