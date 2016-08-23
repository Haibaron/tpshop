<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>展示商品</title>
	<link rel="stylesheet" type="text/css" href="/tpshop/Public/Admin/lightbox/css/lightbox.css">
	<style type="text/css">
		ul{
			list-style: none;
		}
		li{
			
		}
	</style>
</head>
<body>
	<h1>商品展示</h1>
	<hr />
<?php foreach($data as $val){ ?>
	<ul>
		   <li>
		   	 商品名称:<?=$val['goods_name'] ?>
		   </li>
		   <li>
		   	 商品价格:<?=$val['goods_price'] ?>
		   </li>

		   <li>
		   	 商品简介: <?=$val['goods_desc'] ?>
		   </li>
		    <li>
		   	 创建时间: <?=date("Y-m-d H:i:s",$val['create_time']) ?>
		   </li>
		   <li>
		   	 商品图片: <a href="<?php echo '/tpshop/Public/Uploads/'.$val['goods_img']?>" data-lightbox="light" data-title="<?=$val['goods_name'] ?>"><img src="<?php echo '/tpshop/Public/Uploads/'.$val['goods_thumb']?>"></a>
		   </li>
		   <li>
		   	操作：<a href="<?=U('edit',array('id'=>$val['id']))?>">编辑</a>
		          <a href="<?=U('del',array('id'=>$val['id']))?>" onclick="return confirm('确定删除么？？')">真正删除</a>
		   </li>
	
	</ul><?php	} ?>
</body>
<script type="text/javascript" src="/tpshop/Public/Admin/lightbox/js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="/tpshop/Public/Admin/lightbox/js/lightbox.js"></script>
</html>