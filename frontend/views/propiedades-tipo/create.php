<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropiedadesTipo */

$this->title = 'Create Propiedades Tipo';
$this->params['breadcrumbs'][] = ['label' => 'Propiedades Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedades-tipo-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
