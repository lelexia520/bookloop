<?php
namespace Home\Controller\Own;
use Think\Controller;
class InfoController extends Controller{
	public function index() {
		$info = session('info');
// 		将用户信息取出到数组
		$info = getinfo($info);
// 		赋值
		$this->assign('info',$info);
	
	}
	private function getinfo($info){
// 		从数据库中取出函数

		
		
// 		返回数组
		return $info;
	}
}