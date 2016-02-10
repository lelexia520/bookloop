<?php
namespace Home\Controller\Admin;
use Think\Controller;
class SigninController extends Controller {
	public function index(){
		// 		$this->show($content);
		$this->assign('signin',U('Home/Admin/signin/check'));
		$this->assign('signup',U('Home/Admin/signup/index'));
		$this->display();
// 		echo "Signin";
	}
// 	检查并登陆
	public function check(){
		$email = I('email');
		$password = I('password');
		$User = new Home\Model\Admin\UserModel();
// 		之后是验证环节

		
// 		返回结果
		$auth=U('Home/Middleware/Authenticate/auth');
		$url=U('Home/Admin/Mainpage/index');
		if ($result){
			redirect($auth,$url,3,'正在登陆');
		}
	}
}