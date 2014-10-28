<?php
require_once 'DBConection.php'; 		
class sqlModel extends Model{
		protected $table;
		private $connection;
		function __construct() {
				$this->connection=new DbConection();
		}
		public function getSql($sql) {
				if(!empty($sql)){
						$res=mysql_query($sql);
						return $res;
				}
				return false;
		}
		public function findAtr($atr) {
				
				if(is_array($atr)){
						$sql='select * from '.$this->table;
						$where='';
						foreach($atr as $key=>$value){
								if($where==''){
										$where=' where ';
								}
								else{
										$where.=' and ';
								}
								$where.=$key."='".$value."'";
						}
						
						$res=mysql_query($sql.$where);
						$arrayRes=array();
						while($tmp=mysql_fetch_assoc($res)){
								array_push($arrayRes, $tmp);
						}
						return $arrayRes;
				}
				return false;
		}
		
	
}
