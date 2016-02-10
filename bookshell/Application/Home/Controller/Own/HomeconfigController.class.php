<?php
namespace Home\Controller\Own;
use Think\Controller;
use Think\Upload;
class HomeconfigController extends Controller{
	public function index(){
		$this->assign('info',$info);
		$this->assign('homeindexchange',U('Home/Own/homeconfig/indexchange'));
		$this->display();
// 		这个应该是设置界面
		
	}
	public function avatar(){
		$info = getinfo();
		$this->assign('info',$info);
		$this->assign('homeavatorchange',U('Home/Own/homeconfig/avatorchange'));
		$this->display();
// 		这个是头像设置界面
	}
	public function password(){
		$this->assign('info',$info);
		$this->assign('homepasswordchange',U('Home/Own/homeconfig/passwordchange'));
		$this->display();
// 		更改密码
	}
	public function other(){
		$this->assign('info',$info);
		$this->assign('homeotherchange',U('Home/Own/homeconfig/otherchange'));
		$this->display();
// 		其他东西
	}
	private function indexchange(){
		$nickname=I('nickname');
		$introduction=I('introduction');
	}
	private function avatarchange(){
		$upload = new \Think\Upload();
		$upload->maxSize = 3145728;
		$upload->exts = array('jpg','gif','png','jpeg');
		$upload->rootPath = '';
		$upload->savePath = '';
		//upload file
		$info = $upload->upload();
		if ($info){
			$this->error($upload->getError());
		}else{
			$this->success('upload avatar successful!');
		}
		
	}
	private function passwordchange(){
		$password0 = I('password0');
		$password1 = I('password1');
		$password2 = I('password2');
		$check = A('Middleware/Check');
		$checkoldpass = $check->checkoldpass($password0);
		$check0 = $check->checkpassword($password0);
		$check1 = $check->checkpassword($password1);
		$check2 = $check->checkpassword($password2);
		if ($check0 && $check1 && $check2 && ($password1=$password2)){
			if ($checkoldpass){
// 				更换密码
			
			}else{
				$this->error();
		}
		}else{
			$this->error();
		}
		
		
	}
	private function otherchange(){
		
	}
}