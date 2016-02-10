<?php
namespace Home\Controller\Book;
use Think\Controller;
class BooksellController extends Controller {
	public function index(){
		// 		$this->show($content);
		$this->assign('add',U('Home/Book/Booksell/add'));
		$this->display();
// 		echo "booksell";
	}
	public function add(){
		echo 'adss';
		$bookname = I('bookname');
		$bookwriter = I('bookwriter');
		$bookpress = I('bookpress');
		$boopresstime = I('bookpresstime');
		$seller = I('seller');
		$sellerdepartment = I('sellerdepartment');
		$selleradress = I('selleradress');
		$sellercontact = I('sellercontact');
// 		之后把这些添加进数据库
		$info=array($bookname,$bookwriter,$bookpress,$boopresstime,$seller,$sellerdepartment,$selleradress,$sellercontact);
// 		检查数据正确性

// 		添加进数据库
		$result = addinfo($info);
// 		判断并返回

		
		
	}
	private function addinfo($info){
		
	}
}