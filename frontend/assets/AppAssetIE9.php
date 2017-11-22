<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * For IE9 frontend application asset bundle.
 */
class AppAssetIE9 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js',
    ];
    public $depends = [
    ];
    public $jsOptions = [
        'condition' => 'lte IE9',
    ];

}
