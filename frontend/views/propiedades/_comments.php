<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    // $comments = \frontend\models\Comments::find()->where(['propiedad_id' => $propiedad->id])->all();
    $commentData = $propiedad->getComments();
    $newComment = new \frontend\models\Comments();

?>
<style>




</style>
<div class="p-4">
    <div class="container">
        <div class="row align-items-center pt-5 mb-5 pb-5">
            <div class="col-md-12 mb-4">
                <h2 class="text-primary fw-lighter h4 text-center">
                   <span class="fw-bold">Comentarios</span>
                </h2>
            </div>

            <div class="col-md-12 mb-4">
              <?php $form = ActiveForm::begin(['action' => '/frontend/web/propiedades/comentar']); ?>
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
                      <?= $form->field($newComment, 'propiedad_id')->textInput(['type' => 'hidden', 'value' => $propiedad->id])->label(false) ?>
                      <div class="col-md-12 text-end pt-4">
                          <?= Html::submitButton('Guardar', ['class' => 'btn btn-round btn-primary pr-5 pl-5']) ?>
                      </div>
                  </div>
              <?php ActiveForm::end(); ?>
            </div>

            <?php foreach ($commentData['model'] as $c): ?>
              <div class="col-md-12">
                <div class="bg-lightgray p-4 rounded my-2">
                  <p class="text-primary fw-bold"><?php echo $c->nombre ?> <small class="text-secondary fw-lighter"> <?php echo $c->date ?></small> </p>
                  <p>
                      <?php echo $c->comment ?>
                  </p>
                </div>
              </div>

            <?php endforeach; ?>

            <div class="mt-3 customp">
              <?php echo \yii\widgets\LinkPager::widget([
                  'pagination' => $commentData['pages'],
                  'activePageCssClass' => 'active',
                  'maxButtonCount' => 8,
                  'linkOptions' => ['class' => 'page'],
                  'disabledPageCssClass' => 'disabled',
                  'prevPageLabel' => false,
                  'nextPageLabel' => false,

              ]); ?>
            </div>
        </div>
    </div>
</div>
