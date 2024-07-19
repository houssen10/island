<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class KindnessAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "css/bootstrap.css",
        "css/style.css",
        "css/revolution-slider.css",
        "css/responsive.css" 


    ];
    public $js = [
        "js/jquery.js",
        "js/bootstrap.min.js",
        "js/jquery.countTo.js",
        "js/isotope.js",
        "js/jquery.appear.js",
        "js/html5lightbox/html5lightbox.js",
        "js/owl.js",
        "js/validate.js",
        "js/wow.js",
        "js/revolution.min.js",
        "js/jquery.countdown.js",
        "js/custom.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
