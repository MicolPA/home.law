<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropiedadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="propiedades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'titulo_publicacion') ?>

    <?= $form->field($model, 'tipo_propiedad') ?>

    <?= $form->field($model, 'ubicacion_id') ?>

    <?php // echo $form->field($model, 'habitaciones') ?>

    <?php // echo $form->field($model, 'baños') ?>

    <?php // echo $form->field($model, 'detalles') ?>

    <?php // echo $form->field($model, 'created_by_user_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'galeria_id') ?>

    <?php // echo $form->field($model, 'fecha_publicacion') ?>

    <?php // echo $form->field($model, 'portada') ?>

    <?php // echo $form->field($model, 'extra_text') ?>

    <?php // echo $form->field($model, 'tags') ?>

    <?php // echo $form->field($model, 'precio') ?>

    <?php // echo $form->field($model, 'metros') ?>

    <?php // echo $form->field($model, 'pies') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
