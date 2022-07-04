<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\OfertasPropiedades */

$this->title = 'Create Ofertas Propiedades';
$this->params['breadcrumbs'][] = ['label' => 'Ofertas Propiedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ofertas-propiedades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
