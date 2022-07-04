<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\OfertasPropiedadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ofertas-propiedades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-8">
            <?php echo $form->field($model, 'status_id')->dropDownList(ArrayHelper::map(\frontend\models\OfertasStatus::find()->all(), 'id', 'name'),['prompt'=>'Seleccionar...'])->label('Status') ?>

        </div>

        <div class="col-4">
            <div class="form-group pt-4">
                <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
