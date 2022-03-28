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

    <?php $form = ActiveForm::begin(['enableClientScript' => false], ['enctype' => 'multipart/form-data', 'class' => 'dropzone']); ?>

        <div class="row">
            
            <div class="col-md-6">
                <?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-6">
                <?= $form->field($model, 'titulo_publicacion')->textInput(['maxlength' => true]) ?>
            </div>

            <div class="col-md-6">
                <?php echo $form->field($model, 'tipo_propiedad')->dropDownList(ArrayHelper::map(\frontend\models\PropiedadesTipo::find()->all(), 'id', 'nombre'),['prompt'=>'Seleccionar...', 'required' => 'required']) ?>
            </div>

            <div class="col-md-6">
                <?php echo $form->field($model, 'ubicacion_id')->dropDownList(ArrayHelper::map(\frontend\models\Ubicaciones::find()->all(), 'id', 'nombre'),['prompt'=>'Seleccionar...', 'required' => 'required']) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'habitaciones')->textInput(['type' => 'number']) ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'baños')->textInput(['type' => 'number']) ?>
            </div>
            <div class="col-md-6">
                <?php echo $form->field($model, 'assigned_to_user_id')->dropDownList(ArrayHelper::map(\common\models\User::find()->all(), 'id', 'first_name'),['prompt'=>'Seleccionar...', 'required' => 'required']) ?>
            </div>
            
            <div class="col-md-6">
                <?= $form->field($model, 'precio')->textInput() ?>
            </div>

            <div class="col-md-3">
                <?= $form->field($model, 'metros')->textInput() ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'pies')->textInput() ?>
            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'tags')->textInput(['class' => 'form-control tagsinput']) ?>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    Característica
                    <hr>
                </div>
            </div>

            <?php foreach ($extras as $e): ?>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="extra_<?= $e->id ?>" id="checkbox_<?= $e->id ?>">
                            <label class="custom-control-label" for="checkbox_<?= $e->id ?>"><?= $e->nombre ?></label>
                        </div>
                    </div>
                </div>  
            <?php endforeach ?>
            <div class="col-md-12">
                <?= $form->field($model, 'detalles')->textarea(['rows' => 6]) ?>
            </div>


            <div class="col-md-2">
                <div class="form-group">
                    <div class="input-file input-file-image">
                        <input type="file" class="form-control form-control-file" id="uploadImg2" name="uploadImg2" accept="image/*" required>
                        <label for="uploadImg2" class="  label-input-file btn btn-primary btn-block">
                            <span class="btn-label">
                                <i class="fa-solid fa-cloud-arrow-up mr-2"></i>
                            </span>
                            Portada
                        </label>
                    </div>
                </div>
            </div>
            

            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_2')->fileInput([!$model ? "required" : "" => !$model ? "required" : "", 'id' => 'inputfile2'])->label('<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 2') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_3')->fileInput([!$model ? "required" : "" => !$model ? "required" : "", 'id' => 'inputfile3'])->label('<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 3') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_4')->fileInput([!$model ? "required" : "" => !$model ? "required" : "", 'id' => 'inputfile4'])->label('<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 4') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_5')->fileInput([])->label($galeria->foto_5 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 5') ?>
            </div>
            <div class="col-md-2 inputFile">
                <?= $form->field($galeria, 'foto_6')->fileInput([])->label($galeria->foto_6 ? "CARGADA" : '<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto 6') ?>
            </div>

            <?= $form->field($model, 'portada')->fileInput(['class' => 'form-control', 'style' => 'visibility:hidden'])->label(false) ?>

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
