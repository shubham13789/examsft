<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ScTeacher */

$this->title = 'Create Sc Teacher';
$this->params['breadcrumbs'][] = ['label' => 'Sc Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sc-teacher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
