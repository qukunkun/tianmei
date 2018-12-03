<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class BootstrapSelectAsset extends AssetBundle
{
    // 下面这些资源文件并不在 web 目录下，浏览器无法直接访问。所以我们需要
    // 指定 sourcePath 属性。注意 @vendor 这个 alias，表示 vender 目录
    public $sourcePath = '@vendor/snapappointments/bootstrap-select';
    public $css = [
        'dist/css/bootstrap-select.css',
    ];
    public $js = [
        'js/bootstrap-select.js',
//        'js/i18n/defaults-*.min.js'
    ];
}
