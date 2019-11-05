<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudMarksExSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stud Marks Exes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-marks-ex-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stud Marks Ex', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stud_marks_ex',
            'stud_id',
            'marks_id',
            'ex_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
