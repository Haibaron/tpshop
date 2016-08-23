<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>商品添加页面</title>
<style type="text/css">
	#goods_desc{
		width:800px;
		height: 300px;
	}
</style>
</head>
<body>
   <h1>商品添加</h1>
   <hr/>
	<form action="" method="post" enctype="multipart/form-data">
		<P>
			商品名称：<input type="text" name="goods_name" value="" id="">
		</P>

		<p>
			商品价格：<input type="text" name="goods_price" value="" id="">
		</p>

		<p>
			添加日期：<input type="text" name="create_time" value="" id="date" class="laydate-icon">
		</p>
		<p>
			商品库存：<input type="text" name="goods_number" value="" id="">
	    </p>
		<p>
			商品是否上架：是:<input type="radio" name="is_sale" value="1" checked="checked" id="">
			              否:<input type="radio" name="is_sale" value="0" checked="checked" id="">
		</p>
		<p>
			是否新品：是:<input type="radio" name="is_new" value="1" checked="checked" id="">
			              否:<input type="radio" name="is_new" value="0" checked="checked" id="">
		</p>
		<p>
			是否热销：是:<input type="radio" name="is_hot" value="1" checked="checked" id="">
			              否:<input type="radio" name="is_hot" value="0" checked="checked" id="">
		</p>
		<p>
			图片：<input type="file" name="goods_img" value="" id="">
		</p>
		<p>
			商品详情：<textarea name="goods_desc" id="goods_desc"></textarea>
		</p>
		<p>
			<input type="submit" value="提交">
		</p>
	</form>
</body>
<script charset="utf-8" src="/tpshop/Public/editor/kindeditor.js"></script>
<script charset="utf-8" src="/tpshop/Public/editor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/tpshop/Public/admin/date/laydate.dev.js"></script>

<script type="text/javascript">
	 KindEditor.ready(function(K) {
	            K.create('#goods_desc');
	        });
	/* var=editor;
	 KindEditor.create('#goods_desc');*/
	 laydate({
	 	            elem: '#date',  //定义id的DOM元素
	 	            istime: true,//可以设置具体的时间点
	 	            format: 'YYYY-MM-DD hh:mm:ss',//时间格式
	 	});

</script>
</html>