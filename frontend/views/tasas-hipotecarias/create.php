<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TasasHipotecarias */

$this->title = 'Create Tasas Hipotecarias';
$this->params['breadcrumbs'][] = ['label' => 'Tasas Hipotecarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasas-hipotecarias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
