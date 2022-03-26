<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropiedadesExtrasList */

$this->title = 'Update Propiedades Extras List: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Propiedades Extras Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="propiedades-extras-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
