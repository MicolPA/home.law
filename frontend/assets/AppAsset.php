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
        'css/main.css?v=9',
        'css/custom-styles.css?v=4',
        'css/fontawesome.min.css',
        'css/custom.css?v=0',
        // 'https://use.fontawesome.com/releases/v6.1.1/css/all.css',
        // 'https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css'
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/carousel.js?v=1',
        'js/fontawesome.min.js',
        'js/main.js?v=2',
        // 'https://use.fontawesome.com/releases/v5.15.4/js/all.js',
        // 'assets-atlantis/js/atlantis.min.js',
        // 'assets-atlantis/js/plugin/owl-carousel/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
