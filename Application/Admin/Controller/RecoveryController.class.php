<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
class RecoveryController extends Controller{
	function getDel(){
		$sql=M('goods')->where('is_del=1')->select();
		
		$this->assign('data',$sql);
		$this->display();
	}
	function del(){
		 $id=I('get.id');
		D('Goods')->where('id='.$id)->delete($id);
		$this->redirect('getDel');
	}
}