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
    .form-control{
        padding: 0.5rem 1rem !important;
    }

    @media (min-width: 992px){

        .modal-lg, .modal-xl {
            max-width: 900px;
        }

        .form-modal-container{
            padding: 0px 2.5rem;
        }

    }

    @media (max-width: 992px){

       .modal-body, .form-modal-container{
            padding: 0px !important;
        }
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
      <div class="modal-body">
        <?php $form = ActiveForm::begin(['action' => '/frontend/web/propiedades/enviar-oferta']); ?>
        <div class="row bg-white step-1 form-modal-container">
            <div class="col-md-12 text-center mb-4">
                <h3 class="text-primary h4 text-gotham mb-0">OFERTA DE COMPRA</h3>
                <p class="h4 text-muted fw-light">VALOR USD<?= number_format($precio) ?></p> 
            </div>

            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'monto')->textInput(['class' => 'form-control rounded-2 form-part1', 'required' => 'required', 'type' => 'number'])->label('Monto en dolares') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'cedula')->textInput(['class' => 'form-control rounded-2 form-part1', 'required' => 'required'])->label('Cédula / Pasaporte') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'name')->textInput(['class' => 'form-control rounded-2 form-part1', 'required' => 'required'])->label('Nombre') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'nacionalidad')->textInput(['class' => 'form-control rounded-2 form-part1', 'required' => 'required'])->label('Nacionalidad') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'email')->textInput(['class' => 'form-control rounded-2 form-part1', 'required' => 'required'])->label('Correo') ?>
            </div>
            <div class="col-md-6 label-primary fw-bold mb-4">
                <?= $form->field($model, 'phone')->textInput(['class' => 'form-control rounded-2 form-part1', 'required' => 'required'])->label('Telefono') ?>
            </div>

            <div class="col-md-6">
                <label class="label-primary fw-bold mb-2">Reservation Deposit</label>
                <div class="selectgroup selectgroup-secondary selectgroup-pills mb-2">
                    <label class="selectgroup-item">
                        <input type="radio" name="reservation_amount" value="5" class="selectgroup-input form-part1" required>
                        <span class="selectgroup-button selectgroup-button-icon">5%</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="reservation_amount" value="10" class="selectgroup-input form-part1" required>
                        <span class="selectgroup-button selectgroup-button-icon">10%</span>
                    </label>
                </div>

                <p class="text-muted">
                    El deposito de reserva quedará en escrow en la cuenta de Best Listing <sup><i class="fa-regular fa-registered"></i></sup>, hasta tanto se complete la debida diligencia.
                </p>
                <p class="text-muted">
                    El deposito de reserva solo será reembolsable en caso de alguna situación juridica o fiscal.
                </p>
            </div>

            <div class="col-md-6">
                <div class="form-group mb-4">
                    <label class="label-primary fw-bold">Closing Date</label>
                    <input type="date" class="form-control rounded-2 form-part1" name="closing_date" required>
                </div>

                <p class="text-muted">
                    La fecha de cierre propuesta queda sujeta a confirmación por parte del vendedor.
                </p>

                <div class="form-group mt-5">
                    <label class="label-primary fw-bold">Amueblado segun listing de fecha</label>
                    <select name="amueblado" class="form-control rounded-2 form-part1" required>
                        <option value="">Seleccionar...</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>

            <div class="form-group m-auto pt-4 text-center">
                <a href="javascript:validateFirstPart()" class="btn btn-primary px-4 py-2 small font-12">SIGUIENTE</a>
            </div>
        </div>

        <div class="row bg-white step-2 form-modal-container mt-3" style="display:none">

            <div class="col-md-8">
                <label class="text-primary fw-bold">Contingencia</label>
                <p class="text-muted">La presenta oferta queda condicionada a:</p>
            </div>

            <div class="col-md-4">
                
            </div>

            <div class="col-md-12 my-4">
                <div class="form-check mb-3">
                  <input class="form-check-input" value="1" type="radio" name="contingencia" id="contingenciaRadio1">
                  <label class="form-check-label text-primary fw-bold" for="contingenciaRadio1">
                    Inmueble se encuentre libre de cargas y gravamenes
                  </label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" value="2" type="radio" name="contingencia" id="contingenciaRadio2">
                  <label class="form-check-label text-primary fw-bold" for="contingenciaRadio2">
                    Inmueble se encuentre al día con el pago de impuesto a la propiedad
                  </label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" value="3" type="radio" name="contingencia" id="contingenciaRadio3">
                  <label class="form-check-label text-primary fw-bold" for="contingenciaRadio3">
                    Inmueble se encuentre al día con el pago de mantenimiento
                  </label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" value="4" type="radio" name="contingencia" id="contingenciaRadio4">
                  <label class="form-check-label text-primary fw-bold" for="contingenciaRadio4">
                    Inmueble se encuentre en el mismo estado según fotos y vídeos
                  </label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" value="5" type="radio" name="contingencia" id="contingenciaRadio5">
                  <label class="form-check-label text-primary fw-bold" for="contingenciaRadio5">
                    Que todos los equipos electrodomesticos se encuentren en buen estado y funcionamiento
                  </label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" value="6" type="radio" name="contingencia" id="contingenciaRadio6">
                  <label class="form-check-label text-primary fw-bold" for="contingenciaRadio6">
                    Inmueble se presente daños estructurales
                  </label>
                </div>
            </div>

            
                
            <div class="col-md-12 mt-3">
                <p class="text-primary fw-bold text-center">Políticas y Condiciones</p>
                <p class="text-muted justify-content-center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing, elit. In expedita amet provident incidunt neque illum blanditiis quisquam modi, unde quam perferendis tempore esse cumque illo, pariatur consectetur numquam deleniti quidem eaque facilis maxime odit molestiae voluptates? Quis, odit labore eius sapiente numquam pariatur ullam quidem quaerat natus repudiandae ea unde.
                </p>

                <div class="form-check m-auto my-4" style="width:fit-content;">
                  <input class="form-check-input mr-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                  <label class="form-check-label text-muted" for="flexRadioDefault1">
                    Acepto Politicas y Condiciones
                  </label>
                </div>
                <div class="form-group m-auto pt-4 text-center">
                    <a href="javascript:back()" class="btn btn-secondary mr-2 px-4 py-2 small font-12">ATRAS</a>
                    <?= Html::submitButton('ENVIAR OFERTA', ['class' => 'btn btn-primary px-4 py-2 mr-2 small font-12']) ?>
                    <a href="javascript:openOfertTab()" class="btn btn-outline-primary px-4 py-2 small font-12">VISTA PREVIA <i class="fa-solid fa-up-right-from-square ml-2"></i></a>
                    <!-- <a href="javascript:validateFirstPart()" class="btn btn-mut px-4 py-2 small font-12">VISTA PREVIA <i class="fa-solid fa-up-right-from-square"></i></a> -->
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
      </div>
      
    </div>
  </div>
</div>

<input type="hidden" class="propiedad_id" value="<?= $id ?>">