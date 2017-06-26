<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\LoginAsset;
use yii\widgets\Pjax;

LoginAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?php \Yii::$app->view->registerMetaTag(['name' => 'X-FRAME-OPTIONS','content' => 'DENY']); ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        .nav-bgcolor{
            background-color:#2A3F54 ;
        }
    </style>
</head>

    
   
<?php $this->beginBody(['class' => 'bgImage']); ?>
    
    <?php // $a = get_browser(null, true);
//    var_dump($a)?>
<nav class="navbar nav-bgcolor navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>
  </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
          </ul>
     
     
     
    </div>
</nav>
<div class="wrap">
   <?php Pjax::begin(['timeout' => 5000 ]) ?>
 <?php
    
       echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
           $login = Yii::$app->user->isGuest ? (
                ['label' => '', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->user_email . ')',
                    ['class' => 'btn btn-link']
            )
                . Html::endForm()
   
                . '</li>'
                   
            )
        ],
    ]);
     
    
    
        
          
     
  
    ?>
    <?php Pjax::end() ?>

    <div class="container">
        
        <?= $content ?>
    </div>
</div>

   

<?php $this->endBody() ?>


</html>

<?php $this->endPage() ?>


