<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>商品类型添加</title>
</head>
<body>
	<form action="/tpshop/index.php/Admin/Attribute/add" method="post" id='type_form'> 
		<p>属性名称:<input type="text" name="attr_name"></p>
		<p>商品类型:<select name="type_id">
		 <?php foreach($data as $p){ ?>
			<option  value="<?php echo $p['id'] ?>">
				<?php echo $p['name'] ?>
			</option>
		 <?php  } ?>
		</select></p>
		<p>属性类型:<input type="radio" name="attr_type" value="0">唯一<input type="radio" name="attr_type" value="1">单选</p>
		<p>属性录入方式:<input type="text" name="attr_type" value="0">手工收入<input type="text" name="attr_type" value="1">列表选择</p>

		<p>属性的可选值:<textarea cols="30" rows="10" ></textarea></p>
		<input type="submit" >
	</form>
</body>
</html>