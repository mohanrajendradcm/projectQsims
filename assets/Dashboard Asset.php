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
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
         'web/bootstrap/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
         'web/dist/css/AdminLTE.min.css',
         'web/dist/css/skins/_all-skins.min.css',
         'web/plugins/iCheck/flat/blue.css',
          'web/plugins/morris/morris.css',
           'web/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
           'web/plugins/datepicker/datepicker3.css',
            'web/plugins/daterangepicker/daterangepicker.css',
             'web/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
           
    ];
    public $js = [
          "web/plugins/jQuery/jquery-2.2.3.min.js",
"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js",
"web/bootstrap/js/bootstrap.min.js",
"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js",
"web/plugins/morris/morris.min.js",
"web/plugins/sparkline/jquery.sparkline.min.js",
"web/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
"web/plugins/knob/jquery.knob.js",
"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js",
"web/plugins/daterangepicker/daterangepicker.js",
"web/plugins/datepicker/bootstrap-datepicker.js",
"web/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
"web/plugins/slimScroll/jquery.slimscroll.min.js",
"web/plugins/fastclick/fastclick.js",
"web/dist/js/app.min.js",
"web/dist/js/pages/dashboard.js",
"web/dist/js/demo.js",
         "web/admin/bootstrap/js/main.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}