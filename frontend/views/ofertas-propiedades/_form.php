<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\OfertasPropiedades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ofertas-propiedades-form">

    

    <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'monto')->textInput(['required' => 'required', 'readonly' => 'readonly']) ?>
            </div>
            <div class="col-md-6 pt-5">
                <a class="btn btn-primary btn-sm mr-2" href="/frontend/web/propiedades/ver/<?= $model->propiedad_id ?>" target="_blank">Ver propiedad <i class="fas fa-external-link-alt ml-2"></i></a>
                <a class="btn btn-success btn-sm" href="<?= $model->pdf_url ?>" target="_blank">Ver Oferta <i class="fas fa-external-link-alt ml-2"></i></a>
            </div>
        </div>

        

        <?php echo $form->field($model, 'status_id')->dropDownList(ArrayHelper::map(\frontend\models\OfertasStatus::find()->all(), 'id', 'name'),['prompt'=>'Seleccionar...', 'required' => 'required'])->label('Status') ?>



    <div class="form-group">
        <?= Html::submitButton('Cambiar Status', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
