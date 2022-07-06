<?php

namespace frontend\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{

    public function init(){
        # Yii::setAlias('@bower', dirname(__DIR__) . '/vendor2/bower/');
    }
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        // 'assets-atlantis/css/atlantis.css',
        'css/main.css?v=18',
        'css/custom-styles.css?v=5',
        'css/fontawesome.min.css',
        'css/custom.css?v=1',
        // 'https://use.fontawesome.com/releases/v6.1.1/css/all.css',
        // 'https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css'
    ];
    public $js = [
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'assets-atlantis/js/plugin/jquery.validate/jquery.validate.min.js',
        'assets-atlantis/js/plugin/list.js/list.min.js',
        'js/carousel.js?v=3',
        'js/fontawesome.min.js',
        'js/sweetalert.min.js',
        'js/jquery.mask.js',
        'js/main.js?v=13',
        // 'https://use.fontawesome.com/releases/v5.15.4/js/all.js',
        // 'assets-atlantis/js/atlantis.min.js',
        // 'assets-atlantis/js/plugin/owl-carousel/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
