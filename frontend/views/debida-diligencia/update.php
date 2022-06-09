<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DebidaDiligencia */

$this->title = 'Update Debida Diligencia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Debida Diligencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="debida-diligencia-update">

    <?= $this->render('_form', [
        'model' => $model,
        'propiedad' => $propiedad,
    ]) ?>

</div>
