<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-lg-5 col-md-7 pt-5 m-auto">
            <div class="card px-5 py-5">
                <div class="text-center">
                    <img src="<?= Yii::getAlias("@web") ?>/images/logo.png" width="150px" class="mb-3">
                </div>
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Usuario') ?>
                <?= $form->field($model, 'first_name')->textInput(['autofocus' => true])->label('Nombre') ?>
                <?= $form->field($model, 'last_name')->textInput(['autofocus' => true])->label('Apellido') ?>
                <?= $form->field($model, 'role_id')->textInput(['type' => 'hidden', 'value' => 3])->label(false) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
