<?php
		
class arrayModel extends Model{
				
		public function setData($param) {
				if(is_array($param)){
						$data=$param;
				}
				else{
						$data=array($param);
				}
		}
	
}
