<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropiedadesTipo */

$this->title = 'Editar Propiedades Tipo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Propiedades Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propiedades-tipo-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
