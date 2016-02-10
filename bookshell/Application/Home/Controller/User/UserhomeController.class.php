<?php
namespace Home\Controller\User;
use Think\Controller;
class UserhomeController extends Controller {
	public function index(){
		// 		$this->show($content);
		// 		$this->display();
		echo "userhome";
	}
	public function read($id=0){
		echo 'id='.$id;
	}
	public function archive($year='2013',$month='01'){
		echo 'year='.$year.'&month='.$month;
	}
}