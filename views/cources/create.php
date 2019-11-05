<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cources */

$this->title = 'Create Cources';
$this->params['breadcrumbs'][] = ['label' => 'Cources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cources-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
