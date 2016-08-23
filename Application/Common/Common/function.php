<?php 


/**
 * PHP防止XSS攻击过滤函数
 * @param  string $val 需要过滤的数据
 * @return string      过滤后的数据
 */
 function removeXSS($val){
	static $obj = null;
	if($obj === null){
		require './HTMLPurifier/HTMLPurifier.includes.php';
		$obj = new HTMLPurifier();
	}

	return $obj->purify($val);
}


/*
   【string】$create 添加商品时表单提交过来的入库时间
*/
function addGoodsTime($create){
	if($create){
		return time();
	}else{
		return strtotime($create);
	}
}
?>
