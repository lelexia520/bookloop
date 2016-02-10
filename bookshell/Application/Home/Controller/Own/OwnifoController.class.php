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
		$this->assign('homeconfig',U('Home/Own/homeconfig/index'));
		$avator = new Think\Image();
		$this->assign('avatar',$avatar);
		$this->show();
	
	}
	private function getinfo($info){
// 		从数据库中取出用户数据这部分准备做到中间件里面去

		
		
// 		返回数组
		return $info;
	}
}