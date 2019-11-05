<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ScTeacher */

$this->title = 'Update Sc Teacher: ' . $model->sct_id;
$this->params['breadcrumbs'][] = ['label' => 'Sc Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sct_id, 'url' => ['view', 'id' => $model->sct_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sc-teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
