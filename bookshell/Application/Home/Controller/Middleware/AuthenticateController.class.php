<?php
namespace Home\Controller\Middleware;
use Think\Controller;
class AuthenticateController extends Controller {
	public function auth($url) {
// 		先判断是否登录

// 		之后重新定向到原来的网址
		$this->redirect($url);
		
	}
}