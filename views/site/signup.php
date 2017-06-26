
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use kartik\password\PasswordInput;
?>
<?php
$this->context->layout = 'login';
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;0
?>

   <body class="hold-transition register-page">
 <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

 <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'options' => ['class' => 'form-horizontal disable-submit-buttons'],
                        'fieldConfig' => [
                          //  'template' => "<div class=\"col-md-12 col-sm-12 col-xs-12\">{input}</div>\n<div></div>",
                        ],
                    ]); ?>
        <div class="form-group has-feedback">
       <!-- <input type="email" class="form-control" placeholder="Email">-->
         <?= $form->field($model,'project_user_email')->textInput(['placeholder'=>'Email','class'=>'form-control'])->label(false); ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
       <!-- <input type="password" class="form-control" placeholder="Password">-->
           <?= $form->field($model,'project_user_password')->passwordInput(['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password'])->label(false); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
       <!-- <input type="email" class="form-control" placeholder="Email">-->
         <?= $form->field($model,'project_user_fname')->textInput(['placeholder'=>'Firstname','class'=>'form-control'])->label(false); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
       <!-- <input type="email" class="form-control" placeholder="Email">-->
         <?= $form->field($model,'project_user_lname')->textInput(['placeholder'=>'Lastname','class'=>'form-control'])->label(false); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
         <div class="checkbox icheck">
            <!--<label>
              <input type="checkbox"> Remember Me
            </label>-->
            <?= $form->field($model, 'agree')->checkbox([
            //'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
      <?= Html::submitButton('Register', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'Signin-button']) ?>
          
     </div>
        <!-- /.col -->
      </div>
      <?php ActiveForm::end(); ?>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="" class="text-center">Already a member</a>

  </div>
</div>
</body>
