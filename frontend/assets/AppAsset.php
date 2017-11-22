<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/agency.css',
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'https://fonts.googleapis.com/css?family=Kaushan+Script',
        'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic',
        'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700',
    ];
    public $js = [
        'js/agency.js',
        'js/contact_me.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yarcode\fa\FontAwesomeBundle',
    ];
}
