<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudMarksEx */

$this->title = 'Update Stud Marks Ex: ' . $model->stud_marks_ex;
$this->params['breadcrumbs'][] = ['label' => 'Stud Marks Exes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stud_marks_ex, 'url' => ['view', 'id' => $model->stud_marks_ex]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stud-marks-ex-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
