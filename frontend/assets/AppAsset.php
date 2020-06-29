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
        'css/site.css',
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/flaticon.css',
        'css/font-awesome.min.css',
        'css/magnific.min.css',
        'css/meanmenu.min.css',
        'css/owl.carousel.css',
        'css/owl.transitions.css',
        'css/owl.video.play.css',
        'css/responsive.css',
        'css/themify-icons.css',
        'css/venobox.css',
        'css/style.css',
    ];
    public $js = [
        'js/vendor/jquery-1.12.4.min.js',
        'js/vendor/modernizr-2.8.3.min.js',
        'js/bootstrap.min.js',
        'js/form-validator.min.js',
        'js/jquery.meanmenu.js',
        'js/magnific.min.js',
        'js/main.js',
        'js/mapcode.js',
        'js/owl.carousel.min.js',
        'js/plugins.js',
        'js/venobox.min.js',
        'js/wow.min.js',
        
    ];
    public $depends = [
//         'yii\web\YiiAsset',
//         'yii\bootstrap\BootstrapAsset',
    ];
}
