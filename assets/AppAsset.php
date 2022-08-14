<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'hibootstrap/css/bootstrap.min.css',
        'hibootstrap/css/line-awesome.min.css',
        'hibootstrap/css/flaticon.css',
        'hibootstrap/css/swiper-min.css',
        'hibootstrap/css/magnific-popup.css',
        'hibootstrap/css/fancybox.css',
        'hibootstrap/css/aos.css',
        'hibootstrap/css/odometre.css',
        'hibootstrap/css/style.css',
        'hibootstrap/css/responsive.css',
        'hibootstrap/css/dark-theme.css',
        'css/site.css',

    ];
    public $js = [
        'hibootstrap/js/jquery.min.js',
        'hibootstrap/js/bootstrap.min.js',
        'hibootstrap/js/form-validator.min.js',
        'hibootstrap/js/contact-form-script.js',
        'hibootstrap/js/aos.js',
        'hibootstrap/js/swiper-min.js',
        'hibootstrap/js/jquery-magnific-popup.js',
        'hibootstrap/js/fancybox.js',
        'hibootstrap/js/jquery.appear.js',
        'hibootstrap/js/odometre.min.js',
        'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
