<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\OfertasPropiedades */

$this->title = 'Editar oferta';
$this->params['breadcrumbs'][] = ['label' => 'Ofertas Propiedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ofertas-propiedades-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
