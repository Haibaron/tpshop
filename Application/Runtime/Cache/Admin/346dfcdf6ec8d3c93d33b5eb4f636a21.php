<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/tpshop/Application/Admin/View/Goods/css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="./admin.php?c=goods&a=showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="/tpshop/index.php/Admin/Goods/add" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="goods_name" /></td>
                </tr>
                <tr>
                    <td>商品分类</td>
                    <td>
                        <select name="f_goods_category_id">
                            <option value="0">请选择</option>
                            {foreach from=$s_category_info key=_k item=_v}
                            <option value="<?php echo ($_v["category_id"]); ?>"><?php echo ($_v["category_name"]); ?></option>
                            {/foreach}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="f_goods_brand_id">
                            <option value="0">请选择</option>
                            {foreach from=$s_brand_info key=_k item=_v}
                            <option value="<?php echo ($_v["brand_id"]); ?>"><?php echo ($_v["brand_name"]); ?></option>
                            {/foreach}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="goods_price" /></td>
                </tr>
                 <tr>
                    <td>商品库存</td>
                    <td><input type="text" name="goods_number" /></td>
                </tr
                <tr>
                    <td>创建时间</td>
                    <td><input type="text" name="create_time" id="date" class="laydate-icon" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="goods_img" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="goods_desc"></textarea>
                    </td>

                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
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