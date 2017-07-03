<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="project-form">
    
    <style>
        .facilityWidth{
            width:85px;text-align: left !important;
        }
    </style>
    
    <?php if(!$model->isNewRecord) { ?>
  <div style="width:50%;padding-right:20px;">
 <?php }?>
      
     <?php $form = ActiveForm::begin([
       'options' => ['class' => 'form-horizontal disable-submit-buttons', 'id'=> 'projectForm'],
       'layout' => 'horizontal',
        'action' => [$model->isNewRecord ? 'create' : 'update?id='.$model->project_id],
        'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{endWrapper}",
        'horizontalCssClasses' => [
        'label' => 'pull-left facilityWidth',
        'input' => 'pull-left col-md-12 col-sm-12 col-xs-12',
        'wrapper' => 'pull-left',   

            ],
        ],
       
    ]); ?>
     
    <?= $form->errorSummary($model, $options = ['header'=>'']); ?>
    
    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_owner')->textInput(['maxlength' => true]) ?>

 <!--   <?= $form->field($model, 'created_date')->textInput() ?>-->
 
<!--<?php echo  $form->field($model, 'created_date')->widget(DatePicker::classname(), [
    'model' => $model,
    'attribute' => 'created_date',
    'options' => [
        'placeholder' => 'Created date',
        'class' => 'datePicker',
        'style'=>'width:200px;border-radius:5px;border:1px solid #ccc;font-size:14px;height:28px;',
       // 'dateFormat' => 'yyyy-M-dd',
    ],
    //'language' => 'ru',
    'dateFormat' => 'yy-MM-dd',
]);
?>-->
        <?php  
            //Select Category from sim_modules table and assign module_id.
            $category = ArrayHelper::map(app\models\ProjectCompany::find()->all(),'company_id' ,'company_name');
            echo $form->field($model, 'company_id')->widget(Select2::classname(), [
                   'data' => $category,
                   'options' => ['placeholder'=> Yii::t('app','Select Company').'....', 'style'=> 'width:20px!important;'],
                   'pluginOptions' => [
                       'allowClear' => true
                   ],
            ])->label(Yii::t('app','Company'));; 
        ?>
    
 
      <div style="clear:both;"></div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-sm' : 'btn btn-primary btn-sm','data' => ['disabled-text' => 'Please Wait']]) ?>
        <?php if($model->isNewRecord) {
          echo Html::Button(Yii::t('app','Cancel'),['class' => 'btn btn-default btn-sm', 'data-dismiss' => 'modal', 'area-hidden' => 'true']);
        }?>
    </div>

<?php ActiveForm::end(); ?>

</div>
