<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<div class="modal fade" id="templateModal" aria-hidden="true" aria-labelledby="templateModalLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
    	<div class="modal-header border-bottom-0 pb-0">
        	<a class="text-danger"></a>
        	<button type="button" class="text-end text-danger fw-bold float-end bg-white border-0" data-bs-dismiss="modal">CERRAR</button>
    	</div>
    	<div class="modal-body px-5 pt-0">
      	<div class="container px-md-5">
      		<div class="row">
    				<?php $form = ActiveForm::begin(); ?>
        			<div class="col-md-12 text-center pb-3 mt-3">
                	<h3 class="text-primary h5 text-gotham mb-0">PLANTILLA</h3>
            	</div>
            	<div class="col-md-12 pb-3 mb-3 border-bottom">
            		<p class="text-center text-primary fw-bold font-12 mb-2 mt-4">LAYOUT GROUP</p>
	                <div class="m-auto selectgroup py-1" style="width: fit-content;">
                    <label class="selectgroup-item">
                        <input type="radio" name="layout" value="corporate-view" class="selectgroup-input" <?= $user->layout == 'corporate-view' ? 'checked' : '' ?>>
                        <span class="selectgroup-button border-0 font-12 text-muted fw-bold-2">
                            <p class="mb-2 text-muted display-1">
                                <img src="/frontend/web/images/icons/corporate-view.svg" width="60px">
                            </p>
                            CORPORATE VIEW
                        </span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="layout" value="center-view" class="selectgroup-input" <?= $user->layout == 'center-view' ? 'checked' : '' ?>>
                        <span class="selectgroup-button border-0 font-12 text-muted fw-bold-2">
                            <p class="mb-2 text-muted display-1">
                                <img src="/frontend/web/images/icons/center-view.svg" width="60px">
                            </p>
                            CENTER VIEW
                        </span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="layout" value="simple-view" class="selectgroup-input" <?= $user->layout == 'simple-view' ? 'checked' : '' ?>>
                        <span class="selectgroup-button border-0 font-12 text-muted fw-bold-2">
                            <p class="mb-2 text-muted display-1">
                                <img src="/frontend/web/images/icons/simple-view.svg" width="60px">
                            </p>
                            SIMPLE VIEW
                        </span>
                    </label>
	                </div>
	            </div>
            	<div class="col-md-12 pb-3 mb-3 border-bottom">
            		<p class="text-center text-primary fw-bold font-12 mb-2 mt-4">COLOR</p>
	                <div class="m-auto selectgroup py-1" style="width: fit-content;">

	                		<?php foreach ($plantillas_list as $p_list): ?>
	                			<label class="selectgroup-item px-2">
                            <input type="radio" name="template" value="<?= $p_list->id ?>" class="selectgroup-input" <?= $plantilla_selected['id'] == $p_list->id ? 'checked' : '' ?>>
                            <span class="selectgroup-button border-0 fw-bold-2 font-12 text-primary">
                                <p class="mb-2 text-muted display-1">
                                    <img src="/frontend/web/images/icons/<?= str_replace(' ', '-', strtolower($p_list->name)) ?>.jpeg" width="60px">
                                </p>
                                <?= $p_list->name ?>
                            </span>
                        </label>
	                		<?php endforeach ?>
	                </div>
	            </div>

	            <div class="col-md-12 py-3">
	            	<div class="text-center">
	            		<?= Html::submitButton('GUARDAR', ['class' => 'btn btn-primary btn-round font-12 px-5']) ?>
	            	</div>
	            </div>
    				<?php ActiveForm::end(); ?>
        	</div>
      	</div>
    	</div>
    </div>
  </div>
</div>