<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Propiedades */

$this->title = 'Editando Propiedad NO.' . $model->codigo;
$this->params['breadcrumbs'][] = ['label' => 'Propiedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propiedades-update">

    <?= $this->render('_form', [
        'model' => $model,
        'galeria' => $galeria,
        'extras' => $extras,
        'title' => $this->title,
    ]) ?>

</div>
