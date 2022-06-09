<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DebidaDiligenciaListado */

$this->title = 'Update Debida Diligencia Listado: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Debida Diligencia Listados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="debida-diligencia-listado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
