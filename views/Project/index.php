<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\models\Project;
use yii\jui\Draggable;



$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->registerJs('
      $("#modal").draggable({
        handle: ".modal-header"
    });   
    var a =$( window ).width();
    console.log(a);
     
    $("#demo").flagStrap(function(){   
    });
    
    jQuery("body").on("click", "#demo", function() {
            var a = $("#flagstrap-drop-down-ImSfy6ui-list").html();
            alert(a);
     });
    
 
');
?>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
        'filterModel' => $searchModel,
          'headerRowOptions' => [
            'class' => 'GridHeadingColor'
        ],
        'rowOptions' => [
            'class' => 'GridRowColor'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],    
            'project_name',
            'project_description',
            'project_owner',
           ['class' => 'yii\grid\ActionColumn'],        
        ],
    ]); ?>
    <?php Pjax::end();?>
</div>
