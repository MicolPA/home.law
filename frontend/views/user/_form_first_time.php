<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="row">
	<div class="wizard-container wizard-round col-md-9">
		<div class="wizard-header text-center">
			<h3 class="wizard-title"><b>Registra</b> tus datos</h3>
			<small>Esta información nos permitirá saber más sobre ti.</small>
		</div>
		<?php $form = ActiveForm::begin(['enableClientScript' => false], ['enctype' => 'multipart/form-data']); ?>
			<div class="wizard-body">
				<div class="row">

					<ul class="wizard-menu nav nav-pills nav-primary">
						<li class="step" style="width: 33.3333%;">
							<a class="nav-link active" href="#about" data-toggle="tab" aria-expanded="true"><i class="fa fa-user mr-2"></i>Datos personales</a>
						</li>
						<li class="step" style="width: 33.3333%;">
							<a class="nav-link" href="#account" data-toggle="tab"><i class="fa fa-file mr-2"></i> Cuenta</a>
						</li>
						<li class="step" style="width: 33.3333%;">
							<a class="nav-link" href="#address" data-toggle="tab"><i class="fa-solid fa-photo-film mr-2"></i> Redes Sociales & Multimedia</a>
						</li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="about">
						<div class="row">
							<!-- <div class="col-md-12">
								<h4 class="info-text">Tell us who you are.</h4>
							</div> -->

							
							<div class="col-md-6">
								<?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'required' => 'required']) ?>
							</div>
							<div class="col-md-6">
								<?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'required' => 'required']) ?>
							</div>
							<div class="col-md-6">
                				<?= $form->field($model, 'descripcion')->textarea(['rows' => 6, 'required' => 'required']) ?>
                			</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>Foto de perfil :</label>
									<div class="input-file input-file-image">
										<img class="img-upload-preview img-circle" width="100" height="100" src="/frontend/web/images/profile.png" alt="preview">
										<?= Html::activeTextInput($model, 'photo_url', ['class' => 'form-control form-control-file', 'type' => 'file', 'id' => 'uploadImg', 'accept' => 'image/*', 'required' => 'required']); ?>
										<label for="uploadImg" class=" label-input-file btn btn-primary">Subir foto</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="account">
						<!-- <h4 class="info-text">Inserte sus credenciales</h4> -->
						<div class="row">
							<div class="col-md-8 ml-auto mr-auto">
								<div class="form-group">
									<label>Email</label>
									<?= Html::activeTextInput($model, 'email', ['placeholder' => 'Ihre E-Mail Adresse', 'class' => 'form-control form-control-file', 'type' => 'email', 'required' => 'required']); ?>
								</div>
								<div class="form-group">
									<label>Contraseña</label>
									<input type="text" name="password" class="form-control" minlength="8" required >
								</div>
								<!-- <div class="form-group">
									<label>Confirm Password</label>
									<input type="password" name="confirmpassword" class="form-control" minlength="8" required>
								</div> -->
							</div>
						</div>
					</div>
					<div class="tab-pane" id="address">
						<div class="row">
							<div class="col-md-8 ml-auto mr-auto">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-brands fa-whatsapp"></i></span>
										</div>
										<?= Html::activeTextInput($model, 'whatsapp', ['class' => 'form-control', 'placeholder' => 'Ingresar Whatsapp']); ?>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-primary text-white" id="basic-addon1"><i class="fa-brands fa-facebook"></i></span>
										</div>
										<?= Html::activeTextInput($model, 'facebook', ['class' => 'form-control', 'placeholder' => 'Ingresar Facebook']); ?>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="fa-brands fa-instagram"></i></span>
										</div>
										<?= Html::activeTextInput($model, 'instagram', ['class' => 'form-control', 'placeholder' => 'Ingresar Instagram']); ?>
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fa-brands fa-twitter"></i></span>
										</div>
										<?= Html::activeTextInput($model, 'twitter', ['class' => 'form-control', 'placeholder' => 'Ingresar Twitter']); ?>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="fa-brands fa-youtube"></i></span>
										</div>
										<?= Html::activeTextInput($model, 'video_url', ['class' => 'form-control', 'placeholder' => 'Ingresar URL de Vídeo Presentación']); ?>
									</div>
								</div>

                			</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wizard-action">
				<div class="pull-left">
					<input type="button" class="btn btn-previous btn-fill btn-danger" name="previous" value="Atrás">
				</div>
				<div class="pull-right">
					<input type="button" class="btn btn-next btn-black" name="next" value="Siguiente">
					<input type="submit" class="btn btn-finish btn-black" name="finish" value="Finalizar" style="display: none;">
				</div>
				<div class="clearfix"></div>
			</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>

			<script>
				setTimeout(function(){

				        // Code for the Validator
				        var $validator = $('.wizard-container form').validate({
				                validClass : "success",
				                highlight: function(element) {
				                        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				                },
				                success: function(element) {
				                        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
				                }
				        });
				},1000);
			</script>