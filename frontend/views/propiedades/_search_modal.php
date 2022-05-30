<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$get = Yii::$app->request->get();

$desde = isset($get['desde']) ? $get['desde'] : '';
$hasta = isset($get['hasta']) ? $get['hasta'] : '';

?>

<!-- Modal Filtros -->
<div class="modal fade" id="filtroModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg pb-5">
    <div class="modal-content modal-content-2">
      <div class="modal-header border-0 text-end pb-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php $form = ActiveForm::begin([
            'method' => 'get',
            // 'action' => \yii\helpers\Url::to(['/propiedades/index'])
        ]); ?>
        <div class="row bg-white px-5">
            <div class="col-md-12 text-center pb-3 mt-3">
                <h3 class="text-primary h6 text-gotham mb-0">TIPO DE PROPIEDAD</h3>
            </div>

            <div class="col-md-12  pb-3 mb-3">
                <div class="m-auto selectgroup py-1" style="width: fit-content;">
                    <?php foreach ($tipos as $tipo): ?>
                        <label class="selectgroup-item">
                            <input type="radio" name="PropiedadesSearch[tipo_propiedad]" value="<?= $tipo->id ?>" class="selectgroup-input" <?= $model->tipo_propiedad == $tipo->id ? 'checked' : '' ?>>
                            <span class="selectgroup-button border-0 fw-bold">
                                <!-- <img class="mb-2 text-muted" src="/frontend/web/images/icons/store.svg" width="90px"> <br> -->
                                <p class="mb-2 text-muted display-1">
                                    <img src="/frontend/web/images/icons/<?= strtolower($tipo->nombre) ?>.svg" width="60px">
                                </p>
                                <?= mb_strtoupper($tipo->nombre) ?>
                            </span>
                        </label>
                        <!-- <div class="text-muted text-center d-inline-block px-3">
                             <img class="mb-2" src="/frontend/web/images/icons/habitacion.svg" width="90%"> <br>
                             <span class="text-center fw-bold font-12">
                                 <?//= mb_strtoupper($tipo->nombre) ?>
                             </span>
                        </div> -->
                        
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-md-12 text-center pb-4 mt-2">
                <h3 class="text-primary h6 text-gotham mb-0">RANGO DE PRECIO</h3>
            </div>

            <div class="col-md-11 m-auto mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <input class="form-control rounded-2 placeholder-blue font-12" name="desde" placeholder="Desde" value="<?= $desde ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <input class="form-control rounded-2 placeholder-blue font-12" name="hasta" placeholder="Hasta" value="<?= $hasta ?>">
                        </div>
                    </div>
                </div>

                
            </div>

            


            <div class="col-md-11 m-auto border-top pt-3">
                <div class="row">
                    <div class="col-md-5">
                        <?= $form->field($model, 'habitaciones')->textInput(['type' => 'number', 'class' => 'form-control rounded-2 my-3 placeholder-blue font-12', 'placeholder' => 'Habitaciones'])->label(false) ?>
                        <?= $form->field($model, 'baños')->textInput(['type' => 'number', 'class' => 'form-control rounded-2 my-3 placeholder-blue font-12', 'placeholder' => 'Baños'])->label(false) ?>
                        <?= $form->field($model, 'parqueos')->textInput(['type' => 'number', 'class' => 'form-control rounded-2 my-3 placeholder-blue font-12', 'placeholder' => 'Parqueos'])->label(false) ?>

                        <?php echo $form->field($model, 'ubicacion_id')->dropDownList(ArrayHelper::map(\frontend\models\Ubicaciones::find()->all(), 'id', 'nombre'),['prompt'=>'Ciudad', 'class' => 'form-control rounded-2 my-3 text-primary fw-bold font-12'])->label(false) ?>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 pt-3">
                        <?php foreach ($extras as $ex): ?>
                            <div class="form-check mb-3">
                              <input class="form-check-input" type="radio" value="<?= $ex->nombre ?>" name="extra" id="extra_<?= $ex->id ?>" <?= $model->extra_text == $ex->id ? 'checked' : '' ?>>
                              <label class="form-check-label text-primary fw-bold font-12" for="extra_<?= $ex->id ?>">
                                <?= mb_strtoupper($ex->nombre) ?>
                              </label>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div class="form-group m-auto pt-5 text-center mb-5">
                <?= Html::submitButton('APLICAR', ['class' => 'text-gotham font-12 btn btn-primary btn-round px-5 py-2 small ']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>