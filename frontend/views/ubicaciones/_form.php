<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="ubicaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <div class="w-25 inputFile">
        <?= $form->field($model, 'portada')->fileInput([!$model ? "required" : "" => !$model ? "required" : "", 'accept' => 'image/*'])->label('<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Portada') ?>
    </div>

    <div class="form-group text-right">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success pr-5 pl-5']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
