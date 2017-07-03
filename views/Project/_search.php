<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?php echo $form->field($model, 'project_name',['template' => '
        <div class="col-md-3 col-sm-4 col-xs-12 global-search">
            <div class="row">
                <div class="input-group global-search1 ">
                    {input}
                </div>
            </div>  
        </div>'])->textInput(['class'=>'input-sm form-control','data-default' => '','placeholder'=> Yii::t('app','Project Name')]); ?>

    <!--<?= $form->field($model, 'created_date') ?>-->
    
<?php echo  $form->field($model, 'created_date')->widget(DatePicker::classname(), [
    'model' => $model,
    'attribute' => 'created_date',
    'options' => [
        'placeholder' => 'Created date',
        'class' => 'datepicker',
        'style'=>'width:200px;border-radius:5px;border:1px solid #ccc;font-size:14px;height:28px;',
       
    ],
    //'language' => 'ru',
    'dateFormat' => 'YYYY-MM-d',
]);
?>
    <br>
    <br>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
     
    </div>

    <?php ActiveForm::end(); ?>

</div>
