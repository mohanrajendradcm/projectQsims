<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;
use yii\helpers\Url;
?>

<?php echo yii\bootstrap\Nav::widget([
    'items' => [
        ['label' => Yii::t('app','Project'),'url' => ['/project/index']],
        ['label' => Yii::t('app','Task'),'url' => ['/projectdetails/index']],
        
    ],
    'options' => ['class' =>'nav nav-tabs nav-tab nav-text navbark'],    
]);
?>