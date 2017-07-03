<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\models\Project;
use yii\jui\Draggable;
use yii\widgets\ActiveForm;
use app\models\ProjectSearch;


$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->registerJs('
      $("#modal").draggable({
        handle: ".modal-header"
    });   
  

        
    $(".datepicker").datepicker({
              changeMonth: true,
              changeYear: true,
              dateFormat: "yy-mm-d",
       });
     //   alert("hii");
//$(".datepicker").datepicker("show");
   ') 
        
        
     
?>
    
     <div class="margin-top-20"></div>

      <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <h1><?= Html::encode($this->title) ?></h1>

     
<?php  $this->render('//topmenu/topmenu', ['buttons'=>['project/index'=>'Project', 'projectdetails/index'=>'Task']]); ?>
<?php echo \Yii::$app->view->renderFile('@app/views/topmenu/projects.php'); ?>

<p style="text-align:right">
        <?= Html::button('Create Project',['value'=>Url::to('/project/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
        
       
    </p>
    
  <!--<?php echo Html::a( Yii::t( 'app','projects' ), [ 'project/create' ], [ 'class' => 'btn btn-success','id'=>'modalButton' ]
                    ); ?>-->
  
  <?php Pjax::begin(); ?>
    <?php
       Draggable::begin([
                'clientOptions' => ['grid' => [50, 20]],
            ]);
     Modal::begin([
          'header' => '<span class ="modal-font-size">'.Yii::t('app','Create Projects').'</span>',
          'id' => 'modal',
          'size' => 'modal-md',
          'class' => 'modal-sm',
          'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
          
      ]);
      echo "<div id='modalContent'>";
      echo $this->render('_form', ['model'=>new Project()]);
      echo "</div>";
  
      
    Modal::end();
       
        Modal::begin([
                'header' => '<span class ="modal-font-size">'.Yii::t('app','Confirmation').'</span>',
                'footer' => '<button class = "btn btn-default" data-dismiss = "modal"><span class="glyphicon glyphicon-ban-circle"></span>&nbsp;'.Yii::t('app','Cancel').'</button>'.'<button class = "btn btn-warning confirm-ok"><span class="glyphicon glyphicon-ok"></span>&nbsp;'.Yii::t('app','Ok').'</button>',
                'id' => 'my-confirm',
                'size' => 'modal-md',
                'class' => 'modal-sm'

            ]);                
                echo "<div id ='modalContent'>"; 
                echo "<div class = 'modal-body modal-body-confirm'> Are you Sure you want to delete this item? </div>";
                echo "</div>";
                
            Modal::end();
               Draggable::end();
        ?>
    <?php Pjax::end(); ?> 
                    
   <!--  <div class="align-right">
         // <?php 
          //     $createButton = Html::button(Yii::t('app','Create New Project'), ['class' => 'btn btn-success btn-xs ','id'=>'modalButton','value' => Url::to('/category/create'),]);
        //  ?>
    </div>-->
                    
      <div style="clear:both;">  
      
<?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
     //   'filterModel' => $searchModel,
      
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],    
           // 'project_id',
            'project_name',
            'project_description',
            'project_owner',
       
           ['class' => 'yii\grid\ActionColumn'],        
        ],
    ]); ?>
    <?php Pjax::end();?>
          
</div>
