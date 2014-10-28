<?php
class DBConection {
		private $connection=null;
		private $status=false;
		function __construct() {
				$this->connection = mysql_connect(Config::getConfig('DB_host'), Config::getConfig('DB_user') ,Config::getConfig('DB_pass'));
				
				if($this->connection===false){
						$this->connection=null;
						$this->status=false;
						
				}
				else{
						$this->status=true;
				}
				if($this->status){
						$this->status=mysql_select_db(Config::getConfig('DB_name'),$this->connection);
								
				}
		}
}