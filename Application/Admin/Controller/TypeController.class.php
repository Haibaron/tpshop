<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller {
  public function getlst(){

      $this->display();
  }
  public function add(){
     if(IS_POST){
     	$type=D('Type');
     
     	if($type->create()){
     	
     		if($type->add()){
     			$this->success("处理成功",U('getlst'));
     			exit();
     		}else{
     			$error=mysqli_error();
     			$this->error('处理失败！'.$error);
     		}
     	} 
      }
       $this->display();
   }
}