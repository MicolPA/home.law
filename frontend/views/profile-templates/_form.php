<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProfileTemplates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-templates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'banner_background_type')->textInput() ?>

    <?= $form->field($model, 'banner_background')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_background')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_background_type')->textInput() ?>

    <?= $form->field($model, 'body_color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
