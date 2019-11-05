<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudMarksEx */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stud-marks-ex-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stud_id')->textInput() ?>

    <?= $form->field($model, 'marks_id')->textInput() ?>

    <?= $form->field($model, 'ex_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
