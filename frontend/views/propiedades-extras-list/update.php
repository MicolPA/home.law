<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropiedadesExtrasList */

$this->title = 'Editar Propiedades Extras List: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Propiedades Extras Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propiedades-extras-list-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
