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
        'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap',
        'css/owl.carousel.css',
        'css/site.css',
    ];
    public $js = [
        'js/owl.carousel.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
