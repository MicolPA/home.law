<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Propiedades */

$this->title = 'CREAR PROPIEDADES';
$this->params['breadcrumbs'][] = ['label' => 'Propiedades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="">


    <?= $this->render('_form', [
        'model' => $model,
        'galeria' => $galeria,
        'extras' => $extras,
        'title' => $this->title,
    ]) ?>

</div>
