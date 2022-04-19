<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropiedadesExtrasList */

$this->title = 'Crear Propiedades Extras List';
$this->params['breadcrumbs'][] = ['label' => 'Propiedades Extras Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedades-extras-list-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
