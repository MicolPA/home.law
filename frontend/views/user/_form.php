<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(['enableClientScript' => false], ['enctype' => 'multipart/form-data']); ?>
    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <p class="h4">Información personal</p>
                <hr>
            </div>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-2 inputFile">
            <?= $form->field($model, 'photo_url')->fileInput([!$model ? "required" : "" => !$model ? "required" : ""])->label('<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto de perfil') ?>
        </div>


        <?php if (Yii::$app->user->identity->role_id == 1): ?>
            <?= $form->field($model, 'status')->textInput() ?>
        <?php endif ?>

        <?= $form->field($model, 'template_id')->textInput() ?>

        <div class="col-md-6">
            <?= $form->field($model, 'video_url')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'video_platform')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <p class="h4">Redes Sociales</p>
                <hr>
            </div>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'whatsapp')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>


    </div>
<?php ActiveForm::end(); ?>
