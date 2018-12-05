<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/css/nifty.css',
        'statics/css/style.min.css'
    ];

    public $js = [
        'statics/js/aa.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',  //加载jquery.js & yii.js；外框架要求先加载，chosen插件要求侯后加载。 此处屏蔽，在具体页面中添加
        'yii\bootstrap\BootstrapAsset',
        'backend\assets\FontAwesomeAsset',
        'backend\assets\ChosenAsset',
    ];

    //设置把js文件在顶部加载
//    public $jsOptions = [
//        'position' => \yii\web\View::POS_HEAD,
//    ];
}
