<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TasasHipotecariasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasas-hipotecarias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre_banco') ?>

    <?= $form->field($model, 'photo_url') ?>

    <?= $form->field($model, 'tasa') ?>

    <?= $form->field($model, 'duracion') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'tasa_1') ?>

    <?php // echo $form->field($model, 'duracion_1') ?>

    <?php // echo $form->field($model, 'tasa_2') ?>

    <?php // echo $form->field($model, 'duracion_2') ?>

    <?php // echo $form->field($model, 'tasa_3') ?>

    <?php // echo $form->field($model, 'duracion_3') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
