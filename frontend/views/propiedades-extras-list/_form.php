<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PropiedadesExtrasList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="propiedades-extras-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-12">
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-8">
        <div class="form-group">
            <label class="form-label">Filtros</label>
            <div class="selectgroup w-100">
                <label class="selectgroup-item">
                    <input type="radio" name="PropiedadesExtrasList[is_filtro]" value="0" class="selectgroup-input" required <?= $model->is_filtro == 0 ? 'checked' : '' ?>>
                    <span class="selectgroup-button">No Incluir en Filtros</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" name="PropiedadesExtrasList[is_filtro]" value="1" class="selectgroup-input" required <?= $model->is_filtro == 1 ? 'checked' : '' ?>>
                    <span class="selectgroup-button">Incluir en Filtros</span>
                </label>
                
            </div>
        </div>
    </div>

   <!--  <?//= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?> -->

    <div class="col-md-12">
        <div class="form-group">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
