<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


$model = new \frontend\models\ContactForm();
?>
<style>
    label{
        margin-bottom: 5px;
    }
</style>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg p-4">
    <div class="modal-content modal-content-2 p-4">
      <div class="modal-header border-0 text-end pb-0">
        <a class="text-danger"></a>
        <button type="button" class="text-end text-danger fw-bold float-end bg-white border-0" data-bs-dismiss="modal">CERRAR</button>
      </div>
      <div class="modal-body px-4 py-0">
        <?php $form = ActiveForm::begin(['options' => ['autocomplete' => 'off'],], ['enctype' => 'multipart/form-data']); ?>
        <div class="row bg-white px-5 pt-0">
            <div class="col-md-12 text-center mb-4">
                <h3 class="text-primary h4 text-gotham mb-0">OFERTA DE COMPRA</h3>
                <p class="h4 text-muted fw-light">VALOR USD<?= number_format($precio) ?></p> 
            </div>

            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'monto')->textInput(['class' => 'form-control rounded-2', 'required' => 'required', 'type' => 'number'])->label('Monto en dolares') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'cedula')->textInput(['class' => 'form-control rounded-2', 'required' => 'required'])->label('Cédula o Pasaporte') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'name')->textInput(['class' => 'form-control rounded-2', 'required' => 'required'])->label('Nombre') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'nacionalidad')->textInput(['class' => 'form-control rounded-2', 'required' => 'required'])->label('Nacionalidad') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'email')->textInput(['class' => 'form-control rounded-2', 'required' => 'required'])->label('Correo') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'name')->textInput(['class' => 'form-control rounded-2', 'required' => 'required'])->label('Telefono') ?>
            </div>
                
            <div class="col-md-12 mt-3">
                <p class="text-primary fw-bold text-center">Políticas y Condiciones</p>
                <p class="text-muted justify-content-center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing, elit. In expedita amet provident incidunt neque illum blanditiis quisquam modi, unde quam perferendis tempore esse cumque illo, pariatur consectetur numquam deleniti quidem eaque facilis maxime odit molestiae voluptates? Quis, odit labore eius sapiente numquam pariatur ullam quidem quaerat natus repudiandae ea unde.
                </p>

                <div class="form-check m-auto" style="width:fit-content;">
                  <input class="form-check-input mr-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                  <label class="form-check-label text-muted" for="flexRadioDefault1">
                    Acepto Politicas y Condiciones
                  </label>
                </div>
                <div class="form-group m-auto pt-4 text-center">
                    <?= Html::submitButton('ENVIAR OFERTA', ['class' => 'btn btn-primary px-4 py-2 small font-12']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
      </div>
      
    </div>
  </div>
</div>

