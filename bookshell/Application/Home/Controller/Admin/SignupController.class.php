<?php
namespace Home\Controller\Admin;
use Think\Controller;
class SignupController extends Controller {
	public function index(){
// 		$this->show($content);
		$this->assign('signup',U('Home/Admin/Mainpage/signup/construct'));
		$this->display();
// 		echo "Signup";
	}
	public function construct (){
		$username = I('username');
		$email = I('email');
		$nickname = I('nickname');
		$password = I('password');
		$info = array($username,$email,$password,$nickname);
// 		下面是对于这输入的验证，用validator方法，之后改成ajax
		$result = $this->validator($info);
// 		传回错误信息
		if ($result){
			$this->error($result);
		}
// 		输入数据库
		$result = $this->add($info);
// 		成功就重定向到主页
		if ($result){
			redirect(U('Home/Admin/Mainpage/index'));
		}
	}
	
	
// 	这个是输入信息监测
	private function validator($info){
// 		验证
//		传回数据
		return $result;
	}
	
	
	private function add($info){
// 		加入数据表

// 		返回结果
		return $result;
		
	}
	
}