<?php
namespace Home\Controller\Own;
use Think\Controller;
class HomeController extends Controller {
	public function index(){
// 		$this->show($content);
		$ownbook = M();
		$list = $ownbook->order('create_time')->page(I('p'),',10')->select();
		$this->assign('ownbook',$ownbook);
		$count = $ownbook->count();
		$Page =new \Think\Page($count,10);
		$show = $Page->show();
		$this->assign('ownbookpage',$show);
		$this->display();
// 		echo "ownhome";
	}
// 	这里是个人主页的'我的订单'部分 分为两块 历史与未完成
	public function order(){
// 		echo "order";
		$order = M();
// 		实例化历史订单
		$list1 = $order->where('state=0')->order('create_time')->page(I('p').',25')->select();
		$this->assign('orderhistory',$list1);
		$count1 = $order->where('state=0')->count();
		$Page1 = new \Think\Page($count1,25);
		$show1 = $Page1->show();
		$this->assign('orderhistorypage',$show1);
// 		实例化未完成订单
		$list2 = $order->where('state=1')->order('create_time')->page(I('p').',25')->select();
		$this->assign('orderunfinish',$list1);
		$count2 = $order->where('state=0')->count();
		$Page2 = new \Think\Page($count1,25);
		$show2 = $Page2->show();
		$this->assign('orderunfinishpage',$show2);
		$this->display();
	}
// 	这里是个人主页的'我的足迹'(浏览历史）
	public function viewhistory(){
// 		echo "viewhistory";
// 		实例化浏览历史
		$viewhistory = M();
		$list = $viewhistory->order('create_time')->page(I('p'),',10')->select();
		$this->assign('viewhistory',$viewhistory);
		$count = $viewhistory->count();
		$Page =new \Think\Page($count,10);
		$show = $Page->show();
		$this->assign('viewhistorypage',$show);
		$this->display();
	}
// 	收藏夹
	public function favorite() {
// 		echo "favorite";
// 		实例化收藏夹
		$favorite = M();
		$list = $favorite->order('create_time')->page(I('p'),',10')->select();
		$this->assign('favorite',$favorite);
		$count = $favorite->count();
		$Page =new \Think\Page($count,10);
		$show = $Page->show();
		$this->assign('favoritepage',$show);
		$this->display();
	}
}