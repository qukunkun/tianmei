<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = 'Create Goods';
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="goods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="goods-form">

        <form id="category" action="/tianmei/backend/web/goods/create" method="post">
            <div class="form-group">
                <label class="control-label">类别ID</label>
                <select id="category" class="form-control selectpicker">

                    <option value="">请选择</option>
                    <option value="">Ketchup</option>
                    <option value="">Relish</option>

                </select>
            </div>

            <div class="form-group">
                <label class="control-label">商品代码</label>
                <input type="text" id="goods-goods_code" class="form-control" name="Goods[goods_code]" maxlength="255">
            </div>

            <div class="form-group">
                <label class="control-label">商品名称</label>
                <input type="text" id="goods-goods_name" class="form-control" name="Goods[goods_name]" maxlength="255">
            </div>

            <div class="form-group">
                <label class="control-label">商品数量</label>
                <input type="text" id="goods-goods_number" class="form-control" name="Goods[goods_number]">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>

        </form>
    </div>


</div>

<script>
    //要以编程方式更新JavaScript的选择，首先操作选择，然后使用refresh方法更新UI以匹配新状态。 在删除或添加选项时，或通过JavaScript禁用/启用选择时，这是必需的。
    // $('#category').selectpicker('refresh');
    //render方法强制重新渲染引导程序 - 选择ui,如果当您编程时更改任何相关值而影响元素布局，这将非常有用。
    // $('#category').selectpicker('render');
    // $('#category').selectpicker({});
    // $('.dropdown-toggle').dropdown();
    // $('.selectpicker').selectpicker();
</script>
