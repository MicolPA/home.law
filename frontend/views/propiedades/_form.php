<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

$model->assigned_to_user_id = !$model->assigned_to_user_id ? Yii::$app->user->identity->id : $model->assigned_to_user_id;

$this->params['subtitle'] = "Registrar Propiedades";
?>

<div class="">

    <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            
            <div class="col-md-6">
                <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-6">
                <?= $form->field($model, 'titulo_publicacion')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-6">
                <?php echo $form->field($model, 'tipo_propiedad')->dropDownList(ArrayHelper::map(\frontend\models\PropiedadesTipo::find()->all(), 'id', 'nombre'),['prompt'=>'Seleccionar...', 'required' => 'required']) ?>
            </div>

            <div class="col-md-6">
                <?php echo $form->field($model, 'ubicacion_id')->dropDownList(ArrayHelper::map(\frontend\models\Ubicaciones::find()->all(), 'id', 'nombre'),['prompt'=>'Seleccionar...', 'required' => 'required']) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'habitaciones')->textInput(['type' => 'number']) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'baños')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-6">
                <?php echo $form->field($model, 'assigned_to_user_id')->dropDownList(ArrayHelper::map(\common\models\User::find()->all(), 'id', 'first_name'),['prompt'=>'Seleccionar...', 'required' => 'required']) ?>
            </div>

            <div class="col-md-12">
                <?= $form->field($model, 'detalles')->textarea(['rows' => 6]) ?>
            </div>

                <?= $form->field($model, 'created_by_user_id')->textInput() ?>

                <?= $form->field($model, 'assigned_to_user_id')->textInput() ?>

                <?= $form->field($model, 'galeria_id')->textInput() ?>

                <?= $form->field($model, 'fecha_publicacion')->textInput() ?>

                <?= $form->field($model, 'portada')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'extra_text')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'precio')->textInput() ?>

                <?= $form->field($model, 'metros')->textInput() ?>

                <?= $form->field($model, 'pies')->textInput() ?>

                <?= $form->field($model, 'date')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
