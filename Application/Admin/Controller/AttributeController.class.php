<?php
namespace Admin\Controller;
use Think\Controller;
class AttributeController extends Controller {
  public function getlst(){
      $sql=M('Attribute')->select();
      $data=$this->assign('data',$sql);
      $this->display();
  }
  public function add(){
     if(IS_POST){
     	$type=D('Attribute');
     
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
      $type=D('Type')
      $data=$type->select();
      $this->assign('data',$data);
       $this->display();
   }
     public function edit(){
      
      $types=M('Attribute');
      if(IS_POST){
        if($types->create()){  //要将ID 的值传入表单给create方法
         /* var_dump($types->create());
          exit;*/
          if($types->save()){     //返回的是受影响的记录行
              $this->success("处理成功",U('getlst'));
              exit();
            }else{
              $error=mysqli_error();
              $this->error("fail".$error);
            }

        }else{
          //验证 失败
          $error=$types->getError();
          $this->error('处理失败'.$error);
        }
      }
      $id=I("get.id","intval");
      $sql=$types->find($id);
      $this->assign('data',$sql);
       $this->display();
    }



    public function del(){
      $id=I('get.id');
      $model=M('Attribute');
       $res=$model->delete($id);
       if($res){
          $this->success('删除成功',1,U('getlst'));
          $this->redirect('Attribute/getlst');
          exit();
       }else{
         $this->error('删除失败');
       }
     
     
    }
}