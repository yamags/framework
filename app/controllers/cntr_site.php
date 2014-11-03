<?php

class Cntr_Site extends Controller {
		function index() {
				$this->render('index');
		}
		function test1() {
				$data=new arrayModel();
				$data->setData(array('k1'=>'o1','k2'=>'o2','k3'=>'k1','k4'=>'k1'));
				
				$this->render('test1',array('res'=>$data->search('k1')->getData()));
		}
		function test2() {
				$this->redirect('site/test1');
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