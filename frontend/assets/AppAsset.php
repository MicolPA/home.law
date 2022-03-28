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

        // 'assets-atlantis/css/atlantis.css',
        'css/main.css',
        'css/custom-styles.css',
        'css/fontawesome.min.css'
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/carousel.js',
        'js/fontawesome.min.js',
        // 'assets-atlantis/js/atlantis.min.js',
        // 'assets-atlantis/js/plugin/owl-carousel/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
