<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DebidaDiligenciaListado */

$this->title = 'Create Debida Diligencia Listado';
$this->params['breadcrumbs'][] = ['label' => 'Debida Diligencia Listados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debida-diligencia-listado-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
