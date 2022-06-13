<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = "Editando usuario";

if ($model->role_id == 2) {
    $this->params['btn']['text'] = 'Ver Perfil';
    $this->params['btn']['url'] = "agente/$model->id";
}
/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(['enableClientScript' => false], ['enctype' => 'multipart/form-data']); ?>
    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <p class="h4">Información personal</p>
                <hr>
            </div>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label('Usuario') ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        </div>

        <?php if (Yii::$app->user->identity->role_id == 1): ?>
        <div class="col-md-6">
            <?php echo $form->field($model, 'role_id')->dropDownList(ArrayHelper::map(\frontend\models\Roles::find()->all(), 'id', 'name'),['prompt'=>'Seleccionar...', 'required' => 'required'])->label('Rol') ?>
        </div>

        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Clave</label>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" value="000000000">
            </div>
        </div>

        <div class="col-md-3 ">
            <?= $form->field($model, 'status')->dropdownList(array('10'=>'Activo', '9' => 'Desactivar'), []); ?>
        </div>
        <?php endif ?>

        <div class="col-md-3 inputFile pt-3">
            <?= $form->field($model, 'photo_url')->fileInput([!$model ? "required" : "" => !$model ? "required" : ""])->label('<i class="fa-solid fa-cloud-arrow-up mr-2"></i> Foto de perfil') ?>
        </div>


        


        

        <div class="col-md-12">
            <div class="form-group">
                <p class="h4">Redes Sociales</p>
                <hr>
            </div>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'whatsapp')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'video_url')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-12">
            <div class="form-group text-right">
                <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
            </div>
        </div>


    </div>
<?php ActiveForm::end(); ?>
