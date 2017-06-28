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
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    'web/css/site.css',
    'web/admin/bootstrap/css/bootstrap.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
    'web/admin/dist/css/AdminLTE.min.css',
    'web/admin/plugins/iCheck/square/blue.css',
    ];
    public $js = [
        //'customjs/main.js',
   'web/admin/plugins/jQuery/jquery-2.2.3.min.js',
   'web/admin/bootstrap/js/bootstrap.min.js',
   'web/admin/plugins/iCheck/icheck.min.js',
     
       
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        
    ];
}
