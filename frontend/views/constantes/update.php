<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Constantes */

$this->title = 'Editar Constante: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Constantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="constantes-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
