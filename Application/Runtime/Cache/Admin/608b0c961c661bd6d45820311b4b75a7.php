<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>商品修改页面</title>
<style type="text/css">
	#goods_desc{
		width:800px;
		height: 300px;
	}
</style>
</head>
<body>
   <h1>商品修改</h1>
   <hr/>
	<form action="" method="post" >
	    <input type="hidden"  name="id" value="<?=$data['id'] ?>" />
		<P>
			商品名称：<input type="text" name="goods_name" value="<?=$data['goods_name'] ?>" id="">
		</P>

		<p>
			商品价格：<input type="text" name="goods_price" value="<?=$data['goods_price'] ?>" id="">
		</p>

		<p>
			添加日期：<input type="text" name="create_time" value="<?=date('Y-m-d H:i:s',$data['create_time']) ?>" id="date" class="laydate-icon">
		</p>
		<p>
			商品库存：<input type="text" name="goods_number" value="<?=$data['goods_number'] ?>" id="">
	    </p>
		
		<p>
			图片：<input type="file" name="goods_img" value="<?=$data['goods_img'] ?>" id="">
		</p>
		<p>
			商品详情：<textarea name="goods_desc" id="goods_desc" value="<?=$data['goods_desc'] ?>"></textarea>
		</p>
		<p>
		    
			<input type="submit" value="提交">
		</p>
	</form>
</body>
</html>