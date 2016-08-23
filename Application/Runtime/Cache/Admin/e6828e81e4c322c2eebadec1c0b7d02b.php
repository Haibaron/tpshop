<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>商品类型编辑</title>
</head>
<body>
	<form action="/tpshop/index.php/Admin/Type/edit/id/1.html" method="post" id='type_form'> 
		类型名称:<input type="text" name="name" value="<?=$data['name']?>">
		<input type="hidden" name="id" value="<?=$data['id']?>">
		<input type="submit"  >
	</form>
</body>
</html>