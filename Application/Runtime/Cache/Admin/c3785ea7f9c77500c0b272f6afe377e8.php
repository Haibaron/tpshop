<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>类型展示</title>
</head>
<body>
	<ul>
		
			<?php foreach($data as $v){ ?>
			<li>	
				<?php var_dump($v) ?>
			</li>
			<a href="<?=U('edit',array('id'=>$v['id']))?>">edit</a>
			<a href="<?=U('add',array('id'=>$v['id']))?>">add</a>
			 <a href="<?=U('del',array('id'=>$v['id']))?>" onclick="return confirm('确定删除么？？')">删除</a>
			<?php }?>
		
	</ul>
</body>
</html>