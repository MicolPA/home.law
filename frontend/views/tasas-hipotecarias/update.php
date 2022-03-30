<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TasasHipotecarias */

$this->title = 'Update Tasas Hipotecarias: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tasas Hipotecarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tasas-hipotecarias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
