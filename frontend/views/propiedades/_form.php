<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

$model->assigned_to_user_id = !$model->assigned_to_user_id ? Yii::$app->user->identity->id : $model->assigned_to_user_id;

$this->params['subtitle'] = $model->id ? "Editar Propiedad" : "Registrar Propiedad";
?>
<style>
    
</style>
<div class="">

    <?php $form = ActiveForm::begin(['enableClientScript' => false], ['enctype' => 'multipart/form-data']); ?>

        <div class="row">
            
            <?php if ($model->codigo): ?>
                <div class="col-md-6">
                    <?= $form->field($model, 'codigo')->textInput(['required' => 'required', 'readonly' => 'readonly']) ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'titulo_publicacion')->textInput(['required' => 'required']) ?>
                </div>

            <?php else: ?>
            <div class="col-md-12">
                <?= $form->field($model, 'titulo_publicacion')->textInput(['required' => 'required']) ?>
            </div>
            <?php endif ?>

            <div class="col-md-6">
                <?php echo $form->field($model, 'tipo_propiedad')->dropDownList(ArrayHelper::map(\frontend\models\PropiedadesTipo::find()->all(), 'id', 'nombre'),['prompt'=>'Seleccionar...', 'required' => 'required']) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'parqueos')->textInput(['type' => 'number']) ?>
            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'habitaciones')->textInput(['type' => 'number']) ?>
            </div>

            <div class="col-md-2">
                <?= $form->field($model, 'baños')->textInput(['type' => 'number']) ?>
            </div>

            <div class="col-md-6">
                <?php echo $form->field($model, 'ubicacion_id')->dropDownList(ArrayHelper::map(\frontend\models\Ubicaciones::find()->all(), 'id', 'nombre'),['prompt'=>'Seleccionar...', 'required' => 'required']) ?>
            </div>

            
            <?php $users = \common\models\User::find()->all(); ?>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Agente</label>

                    <select class="form-control select_2" name="Propiedades[assigned_to_user_id]">
                        <option value="">Seleccionar...</option>
                        <?php foreach ($users as $u): ?>
                            <option value="<?= $u->id ?>" <?= $model->assigned_to_user_id == $u->id ? 'selected' : '' ?>><?= $u->first_name ? "$u->first_name $u->last_name" : "$u->username" ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            
            <div class="col-md-2">
                <?= $form->field($model, 'precio')->textInput() ?>
            </div>
            <div class="col-md-2">
                <?php echo $form->field($model, 'tipo_contrato_id')->dropDownList(ArrayHelper::map(\frontend\models\PropiedadesTipoContrato::find()->all(), 'id', 'nombre'),['prompt'=>'Seleccionar...', 'required' => 'required'])->label('Tipo Contrato') ?>
            </div>

            <div class="col-md-2">
                <div class="form-group pt-5">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="1" name="Propiedades[isLuxury]" id="luxury" <?= $model->isLuxury ? 'checked' : '' ?>>
                        <label class="custom-control-label" for="luxury">Luxury</label>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'metros')->textInput() ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'pies')->textInput() ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'video_url')->textInput() ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'tags')->textInput(['required' => 'required', 'class' => 'form-control tagsinput', 'placeholder' => 'Piscina, Aire libre, etc']) ?>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    Características
                    <hr>
                </div>
            </div>

            <?php foreach ($extras as $e): ?>
                <?php $check = \frontend\models\PropiedadesExtras::find()->where(['propiedad_id' => $model->id, 'extra_id' => $e->id])->one(); ?>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="extra_<?= $e->id ?>" id="checkbox_<?= $e->id ?>" <?= $check ? 'checked' : '' ?>>
                            <label class="custom-control-label" for="checkbox_<?= $e->id ?>"><?= $e->nombre ?></label>
                        </div>
                    </div>
                </div>  
            <?php endforeach ?>
            <div class="col-md-12">
                <?= $form->field($model, 'detalles')->textarea(['rows' => 6]) ?>
            </div>


            <div class="col-md-2 inputFile">
                <div class="form-group">
                    <label for="inputfile1" class="<?= $model->portada ? 'bg-success' : 'bg-primary' ?>">
                        <i class="fa-solid fa-cloud-arrow-up mr-2"></i> <?= $model->portada ? 'Cargada' : 'Portada' ?>
                    </label>
                    <?= $form->field($model, 'portada')->fileInput([!$model ? "required" : "" => !$model ? "required" : "", 'id' => 'inputfile1', 'class' => 'bg-primary'])->label(false) ?>
                </div>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_2')->fileInput(['id' => 'inputfile2', 'accept' => 'image/*'])->label($galeria->foto_2 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 2') ?>
            </div>

            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_3')->fileInput(['id' => 'inputfile3', 'accept' => 'image/*'])->label($galeria->foto_3 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 3') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_4')->fileInput(['id' => 'inputfile4', 'accept' => 'image/*'])->label($galeria->foto_4 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 4') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_5')->fileInput(['accept' => 'image/*'])->label($galeria->foto_5 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 5') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_6')->fileInput(['accept' => 'image/*'])->label($galeria->foto_6 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 7') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_7')->fileInput(['accept' => 'image/*'])->label($galeria->foto_7 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 8') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_8')->fileInput(['accept' => 'image/*'])->label($galeria->foto_8 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 9') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_9')->fileInput(['accept' => 'image/*'])->label($galeria->foto_9 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 10') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_10')->fileInput(['accept' => 'image/*'])->label($galeria->foto_9 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 11') ?>
            </div>


            <!-- <?php //for($i=2;$i<10;$i++): ?>
                <div class="col-md-2">
                    <div class="input-file input-file-image form-group">
                        <?php //if ($galeria["foto_$i"]): ?>
                            <img class="img-upload-preview" width="150" src='<?//= Yii::getAlias("@web") . $galeria["foto_$i"] ?>' alt="preview">
                        <?php //else: ?>
                            <img class="img-upload-preview" width="150" src='' alt="preview">
                        <?php //endif ?>
                        <?//= $form->field($galeria, "foto_$i")->textInput()->label(false) ?>
                        <input type="file" class="form-control form-control-file" id="foto_<?//= $i ?>" name="foto_<?//= $i ?>" accept="image/*">
                        <label for="portada" class="  label-input-file btn btn-black">
                            <span class="btn-label">
                                <i class="fa-solid fa-cloud-arrow-up mr-2"></i>
                            </span>
                            Subir Imagen
                        </label>
                    </div>
                </div>
            <?php //endfor ?> -->


            <div class="col-md-12 text-right">
                <div class="form-group">
                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-success pr-5 pl-5']) ?>
                </div>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
