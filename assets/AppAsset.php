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
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap',
        'https://use.fontawesome.com/releases/v5.8.1/css/all.css',
        'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css',
        'css2/main.css',
        'css2/modal.css'
    ];
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js',
        // 'libs2/jquery.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js',
        'js2/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
