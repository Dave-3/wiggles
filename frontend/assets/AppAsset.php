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
        'css/bootstrap.min.css',
        'css/owl.carousel.css',
        'css/owl.transitions.css',
        'css/animate.css',
        'css/meanmenu.min.css',
        'css/font-awesome.min.css',
        'css/themify-icons.css',
        'css/flaticon.css',
        'css/venobox.css',
        'css/magnific.min.css',
        'css/owl.video.play.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/vendor/modernizr-2.8.3.min.js',
        'js/vendor/jquery-1.12.4.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs',
        'js/mapcode.js',
        'js/magnific.min.js',
        'js/venobox.min.js',
        'js/wow.min.js',
        'js/jquery.meanmenu.js',
        'js/form-validator.min.js',
        'js/plugins.js',
        'js/main.js',
        
        
        
        
    ];
    public $depends = [
//         'yii\web\YiiAsset',
//         'yii\bootstrap\BootstrapAsset',
    ];
}
