<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>展示商品</title>
</head>
<body>
	<h1>商品展示</h1>
	<hr />
	<ul>
		<?php foreach($data as val){ ?>
		   <li>
		   	 <?=val['goods_name'] ?>
		   </li>
		   <li>
		   	 <?=val['goods_price'] ?>
		   </li>
		   <li>
		   	 <?=val['goods_desc'] ?>
		   </li>


	<?php	} ?>
	</ul>
</body>
</html>