<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/css/site.css',
         'web/admin/bootstrap/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
         'web/admin/dist/css/AdminLTE.min.css',
         'web/admin/dist/css/skins/_all-skins.min.css',
         'web/admin/plugins/iCheck/flat/blue.css',
          'web/admin/plugins/morris/morris.css',
           'web/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
           'web/admin/plugins/datepicker/datepicker3.css',
            'web/admin/plugins/daterangepicker/daterangepicker.css',
             'web/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
           
    ];
    public $js = [
       "web/js/main.js",
          "web/admin/plugins/jQuery/jquery-2.2.3.min.js",
"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js",
"web/admin/bootstrap/js/bootstrap.min.js",
"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js",
"web/admin/plugins/morris/morris.min.js",
"web/admin/admin/plugins/sparkline/jquery.sparkline.min.js",
"web/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
"web/admin/plugins/knob/jquery.knob.js",
"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js",
"web/admin/plugins/daterangepicker/daterangepicker.js",
"web/admin/plugins/datepicker/bootstrap-datepicker.js",
"web/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
"web/admin/plugins/slimScroll/jquery.slimscroll.min.js",
"web/admin/plugins/fastclick/fastclick.js",
"web/admin/dist/js/app.min.js",
"web/admin/dist/js/pages/dashboard.js",
"web/admin/dist/js/demo.js",
 

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
