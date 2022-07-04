<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    $comments = \frontend\models\Comments::find()->where(['propiedad_id' => $propiedad_id])->all();
    $newComment = new \frontend\models\Comments();

?>

<div class="p-4">
    <div class="container">
        <div class="row align-items-center pt-5 mb-5 pb-5">
            <div class="col-md-12 mb-4">
                <h2 class="text-primary fw-lighter h4 text-center">
                   <span class="fw-bold">Comentarios</span>
                </h2>
            </div>

            <div class="col-md-12">
            <?php $form = ActiveForm::begin([]); ?>
                <div class="row">
                    <div class="col-md-6">
                            <?= $form->field($newComment, 'nombre')->textInput(['required' => 'required', 'class' => 'form-control rounded-2']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($newComment, 'correo')->textInput(['required' => 'required', 'class' => 'form-control rounded-2', 'type' => 'email']) ?>
                        </div>
                        <div class="col-md-12 pt-3">
                            <?= $form->field($newComment, 'comment')->textarea(['required' => 'required', 'class' => 'form-control rounded','rows' => 3]) ?>
                        </div>
                        <div class="col-md-12 text-end pt-4">
                            <?= Html::submitButton('Guardar', ['class' => 'btn btn-round btn-primary pr-5 pl-5']) ?>
                        </div>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>