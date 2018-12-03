<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <select id="category" class="form-control selectpicker">

        <option value="">请选择</option>
        <option value="">Ketchup</option>
        <option value="">Relish</option>

    </select>
</div>
