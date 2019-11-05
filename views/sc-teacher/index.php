<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ScTeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sc Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sc-teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sc Teacher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sct_id',
            'sc_id',
            't_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
