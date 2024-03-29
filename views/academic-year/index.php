<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AcademicYearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Academic Years';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-year-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Academic Year', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ac_id',
            'year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
