<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProfileTemplatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-templates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'banner_background_type') ?>

    <?= $form->field($model, 'banner_background') ?>

    <?= $form->field($model, 'body_background') ?>

    <?php // echo $form->field($model, 'body_background_type') ?>

    <?php // echo $form->field($model, 'body_color') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
