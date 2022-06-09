<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\DebidaDiligencia;

/* @var $this yii\web\View */
/* @var $model frontend\models\DebidaDiligencia */
/* @var $form yii\widgets\ActiveForm */

$options = \frontend\models\DebidaDiligenciaListado::find()->all();
$this->title = 'Debida Diligencia';
$this->params['subtitle'] = "Agregar debida Diligencia a propiedad no. $propiedad->codigo";
?>

<div class="debida-diligencia-form">

    <?php $form = ActiveForm::begin(['method' => 'post']); ?>

    <div class="row mt-4">
        <?php foreach ($options as $op): ?>
            <?php $check = DebidaDiligencia::find()->where(['propiedad_id' => $propiedad['id'], 'debida_diligencia_list_id' => $op->id])->one(); ?>
            <div class="col-md-12">
                <div class="custom-control custom-checkbox my-2">
                    <input type="checkbox" class="custom-control-input" type="checkbox" value="<?= $op->id ?>" id="<?= $op->id ?>" name="opcion_<?= $op->id ?>" <?= $check ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="<?= $op->id ?>"><?= $op->name ?></label>
                </div>
            </div>
        <?php endforeach ?>

        <div class="col-md-12">
            <div class="form-group mt-3">
                <?= Html::submitButton('Guardar', ['class' => 'btn btn-success pr-5 pl-5']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
