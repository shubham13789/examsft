<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudMarksExSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stud-marks-ex-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'stud_marks_ex') ?>

    <?= $form->field($model, 'stud_id') ?>

    <?= $form->field($model, 'marks_id') ?>

    <?= $form->field($model, 'ex_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
