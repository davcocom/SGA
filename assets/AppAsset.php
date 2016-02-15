<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
/*<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.parallax-1.1.3.js"></script>
<script src="assets/js/imagesloaded.pkgd.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.easypiechart.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.cbpQTRotator.js"></script>
<script src="assets/js/custom.js"></script>*/
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/font-awesome.min.css',
        'css/simple-line-icons.css',
        'css/animate.css',
        'css/style.css',
        'owl.carousel/owl.carousel.css',
        'owl.carousel/owl.theme.css',
        'viewerjs/dist/viewer.css',
        'justifiedGallery/justifiedGallery.min.css'
    ];
    public $js = [
        'owl.carousel/owl.carousel.js',
        'viewerjs/dist/viewer.js',
        'justifiedGallery/jquery.justifiedGallery.min.js',
        'js/modernizr.custom.js',
        'js/jquery.parallax-1.1.3.js',
        'js/imagesloaded.pkgd.js',
        'js/jquery.sticky.js',
        'js/smoothscroll.js',
        'js/wow.min.js',
        'js/jquery.easypiechart.js',
        'js/waypoints.min.js',
        'js/jquery.cbpQTRotator.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
