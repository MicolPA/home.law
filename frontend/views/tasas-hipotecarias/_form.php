<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TasasHipotecarias */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'nombre_banco')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'duracion_1')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'tasa_1')->textInput(['maxlength' => true]) ?>
        </div>


        <div class="col-md-6">
            <?= $form->field($model, 'duracion_2')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'tasa_2')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'duracion_3')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'tasa_3')->textInput(['maxlength' => true]) ?>
        </div>

        
        <div class="col-md-6 inputFile">
            <?= $form->field($model, 'photo_url')->fileInput([!$model ? "required" : "" => !$model ? "required" : ""])->label('<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Portada') ?>
        </div>

        <div class="form-group text-right">
            <?= Html::submitButton('Guardar', ['class' => 'btn btn-success pr-5 pl-5']) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>
