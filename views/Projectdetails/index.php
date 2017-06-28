<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectdetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php  $this->render('//topmenu/topmenu', ['buttons'=>['project/index'=>'Project', 'projectdetails/index'=>'Task']]); ?>
<?php echo \Yii::$app->view->renderFile('@app/views/topmenu/projects.php'); ?>
    <p style="text-align:right">
        <?= Html::a('Create Project Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'project_id',
            'project_name',
            'Assigne',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
</div>
