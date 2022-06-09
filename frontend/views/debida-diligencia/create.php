<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DebidaDiligencia */

$this->title = 'Create Debida Diligencia';
$this->params['breadcrumbs'][] = ['label' => 'Debida Diligencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debida-diligencia-create">

    <?= $this->render('_form', [
        'model' => $model,
        'propiedad' => $propiedad,
    ]) ?>

</div>
