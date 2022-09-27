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
class AboutAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.gstatic.com',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap',
        'https://use.fontawesome.com/releases/v5.8.1/css/all.css',
        'css2/pages.css',
        'css2/modal.css'
    ];
    public $js = [
        'libs2/jquery.min.js',
        'js2/script_about.js'
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
