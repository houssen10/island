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
class OtikaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
       "assets/otika/css/app.min.css",
       "assets/otika/css/style.css",
        "assets/otika/css/components.css",
        "assets/otika/css/custom.css",
    ];
    public $js = [
        "assets/otika/js/app.min.js",
        "assets/otika/js/scripts.js",
        "assets/otika/js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
