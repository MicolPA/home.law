<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ubicaciones */

$this->title = 'Editar Ubicación: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ubicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ubicaciones-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
