<?php

class View {
		function generate($_controllername,$_content, $_data = null) {
				if($_data!=null&&is_array($_data)){
						foreach($_data as $_key=>$_val){
								$$_key=$_val;
								
						}
				}
				include 'app/views/' .$_controllername.'/'. $_content.'.php';
				
				
		}
}

