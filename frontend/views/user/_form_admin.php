<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Registrar Usuario';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="">
    <div class="row ">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Usuario') ?>
                <?= $form->field($model, 'role_id')->textInput(['type' => 'hidden', 'value' => 2])->label(false) ?>

                <?= $form->field($model, 'email') ?>

                <?php echo $form->field($model, 'role_id')->dropDownList(ArrayHelper::map(\frontend\models\Roles::find()->all(), 'id', 'name'),['prompt'=>'Seleccionar...', 'required' => 'required', 'class' => 'form-control'])->label('Rol') ?>

                <?= $form->field($model, 'password')->passwordInput(['type' => 'text'])->label('Clave') ?>

                <div class="form-group text-right">
                    <?= Html::submitButton('Crear Usuario', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
