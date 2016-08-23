<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="/baron/tpshop/Application/Admin/View/Goods/css/mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/baron/tpshop/index.php/Admin/Goods/add">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>

                        <td>缩略图</td>
            
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>
                  <?php foreach($data as $val){ ?>
                    <tr id="product1">
                        <td>1</td>
                        <td><a href="#"><?=$val['goods_name'] ?></a></td>
                        <td><?=$val['goods_number'] ?></td>
                        <td><?=$val['goods_price'] ?></td>
                        
                        <td><a href="<?php echo $viewPath.$val['goods_img']?>" data-lightbox="light" data-title="<?=$val['goods_name'] ?>" ><img src="<?php echo $viewPath.$val['goods_thumb']?>" height="40" width="40"></a></td>
                       
                        <td>2012-10-18 17:40:34</td>
                        <td><a href="#">修改</a></td>
                        <td>    操作：<a href="<?=U('edit',array('id'=>$val['id']))?>">编辑</a>
                  <a href="<?=U('del',array('id'=>$val['id']))?>" onclick="return confirm('确定删除么？？')">删除</a></td>
                    </tr>
                 <?php  } ?>
                   
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    <script type="text/javascript" src="/baron/tpshop/Public/Admin/lightbox/js/jquery-1.10.1.js"></script>
<script type="text/javascript" src="/baron/tpshop/Public/Admin/lightbox/js/lightbox.js"></script>
</html>