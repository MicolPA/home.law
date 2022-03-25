<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetAdmin extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
       'assets-atlantis/css/bootstrap.min.css',
       'assets-atlantis/css/atlantis.css',
       'assets-atlantis/css/custom-styles.css',
        'css/fontawesome.min.css',

    ];


    public $js = [

        //Core JS Files
        // 'assets-atlantis/js/core/jquery.3.2.1.min.js',
        'assets-atlantis/js/core/popper.min.js',
        'assets-atlantis/js/core/bootstrap.min.js',


        'js/jquery.mask.min.js',

        'assets-atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
        'assets-atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
        'assets-atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
        'assets-atlantis/js/plugin/datatables/datatables.min.js',




        'assets-atlantis/js/plugin/datepicker/bootstrap-datetimepicker.min.js',
        'assets-atlantis/js/atlantis.min.js',
        // 'js/fontawesome.min.js',


        // 'https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js?v=6.0',
        // 'https://use.fontawesome.com/releases/v5.0.7/js/all.js?v=6.0',


        // 'https://unpkg.com/sweetalert/dist/sweetalert.min.js',
        // '//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js',
        // 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        
        'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js',
        'js/jquery.numpad.js?v=2',
        'js/JsBarcode.all.min.js?v=1',
        'js/select2.min.js',
        



    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}

