<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Marks */

$this->title = 'Update Marks: ' . $model->marks_id;
$this->params['breadcrumbs'][] = ['label' => 'Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->marks_id, 'url' => ['view', 'id' => $model->marks_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="marks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
