<?php

class Cntr_Site extends Controller {
		function index() {
				$this->render('index');
		}
		function lol() {
				$city= new city();
				$res=$city->findAtr(array('dialing_code'=>'030'));
				
				
				$this->render('lol',array(
						'name'=>'Gleb',
						'res'=>$res
						));
		}
}