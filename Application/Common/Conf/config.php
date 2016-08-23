<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'tpshop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DEFAULT_FILTER'        =>  'removeXSS', // 默认参数过滤方法 用于I函数...
    //'DEFAULT_FILTER'        =>  'htmlspecialchars', // 默认参数过滤方法 用于I函数...
   // 'UPLOAD_ROOT_PATH' =>'./Public/Uploads/',
    'VIEW_ROOT_PATH'=>'/tpshop/Public/Uploads/',
);