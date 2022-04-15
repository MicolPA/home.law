<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TasasHipotecarias */

$this->title = 'Registrar Tasa Hipotecaria';
$this->params['breadcrumbs'][] = ['label' => 'Tasas Hipotecarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasas-hipotecarias-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
