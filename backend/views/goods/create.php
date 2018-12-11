<?php

use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model app\models\Goods */

$this->title = 'Create Goods';
$this->params['breadcrumbs'][] = ['label' => 'Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

//echo '<pre>'; print_r($data);exit;
?>

<div class="goods-create">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="goods-form">
        <form id="category" action="/tianmei/backend/web/goods/create" method="post">
            <div class="form-group">
                <label class="control-label">类别</label>
                <select id="category_id" name="category_id" data-placeholder="选择类别" class="form-control chosen-select" tabindex="1">
                    <option value=""></option>
                    <?PHP foreach( $data['category_info'] as $key=>$value): ?>
                        <option value="<?= $value['id']?>"><?= $value['description'] ?></option>
                    <?PHP endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label class="control-label">商品代码</label>
                <input type="text" id="goods_code" class="form-control" name="goods_code" maxlength="255">
            </div>

            <div class="form-group">
                <label class="control-label">商品名称</label>
                <input type="text" id="goods_name" class="form-control" name="goods_name" maxlength="255">
            </div>

            <div class="form-group">
                <label class="control-label">商品数量</label>
                <input type="text" id="goods_number" class="form-control" name="goods_number">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>

        </form>
    </div>

<?=Html::jsFile('@web/assets/9fc4e263/jquery.js')?>