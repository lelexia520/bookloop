<?php
namespace Home\Controller\Admin;
use Think\Controller;
class MainpageController extends Controller {
	public function index(){
		// 		$this->show($content);
// 		想把搜索和分类的东西先传到中间件，再将数据传到这个主页上
// 		下面几段可能会转到中间件里面去，这样显示的东西更准确
		$book = M();
		$type = I('type');
		$list = $book->select("type=$type",all)->order('create_time')->page(I('p'),',10')->select();
		$this->assign('book',$ownbook);
		$count = $book->count();
		$Page =new \Think\Page($count,10);
		$show = $Page->show();
		$this->assign('bookpage',$show);
//

		$this->display();
// 		echo "Mainpage";
	}
}