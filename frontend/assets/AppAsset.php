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
        'assets/theme/css/site.css',
        'assets/theme/css/bootstrap.min.css',
        'assets/theme/css/owl.carousel.css',
        'assets/theme/css/owl.transitions.css',
        'assets/theme/css/animate.css',
        'assets/theme/css/meanmenu.min.css',
        'assets/theme/css/font-awesome.min.css',
        'assets/theme/css/themify-icons.css',
        'assets/theme/css/flaticon.css',
        'assets/theme/css/venobox.css',
        'assets/theme/css/magnific.min.css',
        'assets/theme/css/owl.video.play.css',
        'assets/theme/css/style.css',
        'assets/theme/css/responsive.css',
    ];
    public $js = [
        'assets/theme/js/vendor/modernizr-2.8.3.min.js',
        'assets/theme/js/vendor/jquery-1.12.4.min.js',
        'assets/theme/js/bootstrap.min.js',
        'assets/theme/js/owl.carousel.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs',
        'assets/theme/js/mapcode.js',
        'assets/theme/js/magnific.min.js',
        'assets/theme/js/venobox.min.js',
        'assets/theme/js/wow.min.js',
        'assets/theme/js/jquery.meanmenu.js',
        'assets/theme/js/form-validator.min.js',
        'assets/theme/js/plugins.js',
        'assets/theme/js/main.js',
        
        
        
        
    ];
    public $depends = [
//         'yii\web\YiiAsset',
//         'yii\bootstrap\BootstrapAsset',
    ];
}
