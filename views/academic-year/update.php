<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AcademicYear */

$this->title = 'Update Academic Year: ' . $model->ac_id;
$this->params['breadcrumbs'][] = ['label' => 'Academic Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ac_id, 'url' => ['view', 'id' => $model->ac_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="academic-year-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
