<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
   public function getlst(){
   	 $where="1 and is_del=0";   // 1  是取出所有的数据
     $sp=I('get.sp');  //起始价
     $ep=I('get.ep');  //结束价
     $gn=I('get.gn');
     if($sp){
      $where.=" and goods_price >=".$sp;
     }
     if($ep){
      $where.=" and goods_price <=".$ep;
     }
     if($gn){
      $where.=" and goods_name like '%$gn%'";
     }





     $sql=M('goods')->where($where)->select();
    // var_dump($data);
    
     $viewPath=C("VIEW_ROOT_PATH");
     $this->assign('viewPath',$viewPath);
     $this->assign('data',$sql);
     $this->display();
   }
    
    public function add(){
       if(IS_POST){
       	$goods=D('Goods');
       		if($goods->create()){ 
            if($goods->add()){
              $this->success('处理成功！',U('Goods/getlst'));
              exit();
            }else{
                  $error=mysqli_error();
                  $this->error('处理失败！'.$error);
                 }   			
       		}
       }
       $this->display();
    }

    public function edit(){
      
      $goods=D('Goods');
      if(IS_POST){
        if($goods->create()){
         /* var_dump($goods->create());
          exit;*/
          if($goods->save($id)){     //返回的是受影响的记录行
              $this->success("处理成功",U('getlst'));
              exit();
            }else{
              $error=mysqli_error();
              $this->error("fail".$error);
            }

        }else{
          //验证 失败
          $error=$goods->getError();
          $this->error('处理失败'.$error);
        }
      }
      $id=I("get.id","intval");
      $sql=$goods->find($id);
      $this->assign('data',$sql);
       $this->display();
    }



    public function del(){
      $id=I('get.id');
      $model=M('goods');
       $res=$model->where('id='.$id)->setField('is_del',1);
       if($res){
          $this->success('删除成功',1,U('getlst'));
          $this->redirect('Goods/getlst');
          exit();
       }else{
         $this->error('删除失败');
       }
     
     
    }
}