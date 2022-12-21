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
        'libs/fontawesome-free-6/css/all.min.css',
        'css/site.css',
        'css/custom1.css',
        'css/header.css',
        'css/footer.css',
        'css/home/homepage.css',
        'css/home/banner.css',
        'css/home/solutions.css',
        'css/home/clients.css',
        'css/home/testimonials.css',
        'css/home/services.css',
        'css/auth/auth.css',
        
    ];
    public $js = [
        'libs/fontawesome-free-6/js/all.min.js',
        'js/main.js',
        'js/tabs.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
