<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TasasHipotecarias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tasas-hipotecarias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_banco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracion_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracion_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tasa_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracion_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
