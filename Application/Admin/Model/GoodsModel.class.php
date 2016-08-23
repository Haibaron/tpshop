<?php
namespace Admin\Model;
use Think\Model;

/**
* 
*/
class GoodsModel extends Model{
	//商品的自动验证
	protected $_validate=array();

	protected $_auto=array(
		array("create_time","addGoodsTime",1,"function"));  //就是用addGoodsTime函数取完成对create_time字段的自动完成操作

  public function _before_insert(&$data, $option){
    
      $config = array( 
       'maxSize'    =>    3145728,   
       'rootPath'   =>    './Public/Uploads/', 
       'savePath'  =>     'goods/',
       'exts'       =>    array('jpg', 'gif', 'png', 'jpeg')  
       ); 
        $upload = new \Think\Upload($config);// 实例化上传类
        $info=$upload->upload();  //完成上传
        if($info){

            $goodsPath=$info['goods_img']['savepath'].$info['goods_img']['savename'];
            $data['goods_img']= $goodsPath;
    

            $img=new \Think\Image();
            $img->open('./Public/Uploads/'.$goodsPath);
            $thumbPath=$info['goods_img']['savepath'].'thumb_'.$info['goods_img']['savename'];
            $img->thumb(80,80)->save("./Public/Uploads/".$thumbPath);
            $data['goods_thumb']=$thumbPath;
         }
   }

  public function _before_delete($options){
  //$option包含主键的ID 可以根据主键的ID查询记录---使用unlink函数来删除文件
    //$option['where']['id']
    $imgurl=$this->field('goods_img,goods_thumb')->where("id=".$options["where"]["id"])->find();
    foreach ($imgurl as  $v) {
       unlink("./Public/Uploads/".$v);  
    }

  }



}