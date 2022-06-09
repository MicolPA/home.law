<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Constantes */

$this->title = 'Create Constantes';
$this->params['breadcrumbs'][] = ['label' => 'Constantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constantes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
