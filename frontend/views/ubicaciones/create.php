<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ubicaciones */

$this->title = 'registrar Ubicación';
$this->params['breadcrumbs'][] = ['label' => 'Ubicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ubicaciones-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
