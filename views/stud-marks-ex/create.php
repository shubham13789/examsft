<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudMarksEx */

$this->title = 'Create Stud Marks Ex';
$this->params['breadcrumbs'][] = ['label' => 'Stud Marks Exes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stud-marks-ex-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
