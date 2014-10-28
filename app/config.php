<?php
class Config {
		private static $conf=array(
				'defaultControllerName' => 'Site',
				'defaultActionName' => 'index',
				'DB_host'=>'localhost',
				'DB_name'=>'deutschlandblick',
				'DB_user'=>'root',
				'DB_pass'=>'',

				
		);
		public static function getConfig($name=null){
				if(isset($name)){
						return self::$conf[$name];
				}
				else{
						return null;
				}
		}
		
}
