<?php

use yii\helpers\Html;
use yii\grid\GridView;

use leandrogehlen\treegrid\TreeGrid;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '类别管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建类别', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= TreeGrid::widget([
        'dataProvider' => $dataProvider,
        'keyColumnName' => 'id',
        'parentColumnName' => 'parent_id',
        'columns' => [
            'id',
            'description',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => '操作',
                'options' => ['width' => '100px;'],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<i class="fa fa-edit">查看</i>', $url, [
                            'title' => Yii::t('app', 'view'),
                            'class' => 'del btn btn-primary btn-xs',
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<i class="fa fa-unlock-alt">更新</i>', $url, [
                            'title' => Yii::t('app', 'update'),
                            'class' => 'del btn btn-success btn-xs',
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<i class="fa fa-close">删除</i>', $url, [
                            'title' => Yii::t('app', 'delete'),
                            'class' => 'del btn btn-default btn-xs',
                        ]);
                    }
                ],
            ],

        ]
    ]); ?>
</div>
