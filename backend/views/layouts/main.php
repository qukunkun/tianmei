<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>天美后台管理 - 主页</title>
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <?=Html::cssFile('@web/statics/css/bootstrap.min14ed.css')?>
    <?=Html::cssFile('@web/statics/css/animate.min.css')?>
    <?=Html::cssFile('@web/statics/css/style.min862f.css')?>
    <?=Html::cssFile('@web/statics/css/site.css')?>
    <?php $this->head() ?>
</head>
<body class="fixed-sidebar full-height-layout gray-bg">
<?php $this->beginBody() ?>
<?php if((Yii::$app->controller->module->defaultRoute!="site") ||(Yii::$app->controller->module->defaultRoute=="site" && Yii::$app->controller->module->requestedRoute!=""
        && Yii::$app->controller->module->requestedRoute!="site/login")):?>
    <nav class="breadcrumb fix_top hidden-sm hidden-xs" style="height: 45px;">
        <div class="pull-left">
            <?= Breadcrumbs::widget([
                'homeLink'=>['label' => '主 页','url' => '#'],
                'itemTemplate' => "<li class='btn btn-primary radius' style='color:#FFF;line-height:1.6em;margin-top:3px; margin-left: 2px;'>{link}</li>\n", //全局模板  运用到每个link
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary radius " style="line-height:1.6em;margin-top:3px" href="javascript:history.go(-1);" title="后退">
                <span class="fa fa-reply"></span>
            </a>
            &nbsp;
            <a class="btn btn-primary radius" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新">
                <span class="fa fa-refresh"></span>
            </a>
            &nbsp;
        </div>
    </nav>
<?php endif;?>

<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
