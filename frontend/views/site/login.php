<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">

    <div class="row pt-5 pb-5">
        <div class="col-lg-5 col-md-7 pt-5 m-auto">
            <div class="card px-5 py-5">
                <div class="text-center">
                    <img src="<?= Yii::getAlias("@web") ?>/images/logo.png" width="150px" class="mb-3">
                </div>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Usuario') ?>

                    <?= $form->field($model, 'password')->passwordInput()->label('Clave') ?>

                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'rememberMe')->checkbox()->label("Recordar usuario") ?>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group text-end">
                                <?= Html::submitButton('Iniciar sesión', ['class' => 'btn text-white bg-primary', 'name' => 'login-button']) ?>
                            </div>
                        </div>

                        <div class="col-md-12 text-center mt-5 mb-3">
                            <span class="msg">Don't have an account yet ?</span>
                            <a href="<?= Yii::getAlias("@web") ?>/site/signup" class="link">Regístrate aquí.</a>
                        </div>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
