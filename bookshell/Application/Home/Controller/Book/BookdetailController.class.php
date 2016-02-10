<?php
namespace Home\Controller\Book;
use Think\Controller;
class BookdetailController extends Controller {
	public function index(){
// 		$this->show($content);
// 		此处是书籍的详情界面
// 		获取书籍信息
		$bookid = I('bookid');
		$book = M('book');
		$bookinfo = $book->where("bookid=$bookid")->find();
// 		首先是书籍的封面
		$cover = new \Think\Image();
		$cover->open("$bookinfo('bookcoverurl')");
		$this->assign('cover',$cover);
// 		之后是各个书的其他信息
		$this->assign('bookinfo',$bookinfo);
		
// 		留言框
		$bookmessage = M("$bookid"."message");
		$list = $bookmessage->order('create_time')->page(I('p'.",25"))->select();
		$this->assign('bookmessage',$list);
		$count = $bookmessage->count();
		$Page = new \Think\Page($count,10);
		$show = $Page->show();
		$this->assign('bookmessagepage',$show);
// 		显示
		$this->display();
// 		echo "bookdetail";
	}
	public function addbookmessage() {
// 		从路由上得到
		$bookid = I('bookid');	
		$bookmessage = M("$bookid"."message");
// 		之前应该先从Middleware中checkmessage转发过来,涉及安全性，之后修改
		$message = I('bookmessage');
// 		写入数据
		
		
	}
}