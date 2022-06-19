
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$user = \frontend\models\User::findOne($agente_id);

?>

<div class="modal fade" id="contactAgente" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg p-4">
    <div class="modal-content modal-content-2 p-0">
      <div class="modal-header border-0 text-end pb-0">
        <a class="text-danger"></a>
        <button type="button" class="text-end text-danger fw-bold float-end bg-white border-0" data-bs-dismiss="modal">CERRAR</button>
      </div>
      <div class="modal-body pt-0 pb-5">
        <?php $form = ActiveForm::begin([]); ?>
        <div class="row bg-white p-0">
            <div class="col-md-6 card-primary">
                <div class=" avatar-sm fs-4 rounded-circle m-auto" style="width: 100px; height: 100px;background-image: url('<?= Yii::getAlias("@web") . "/". $user->photo_url ?>');background-position: center;background-size: cover;">
                </div>

                <div class="pl-2 mt-2 pb-5 mx-2 mx-md-5 h6 text-center">
                    <a href=""><i class="text-warning  fa-solid fa-star"></i></a>
                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
                </div>
                <div class="h5 w-fit-content m-auto text-center">

                    <p class="fw-bold text-primary mb-0"><?= "$user->first_name $user->last_name" ?></p>
                    <p class="text-muted small mb-4">Agente Inmobiliario</p>
                    <a href="<?= $user->facebook ? $user->facebook : '#' ?>"><i class="text-primary mx-2 fa-brands fa-facebook-f"></i></a>
                    <a href="<?= $user->whatsapp ? $user->whatsapp : '#' ?>"><i class="text-primary mx-2 fa-brands fa-whatsapp"></i></a>
                    <a href="<?= $user->twitter ? $user->twitter : '#' ?>"><i class="text-primary mx-2 fa-brands fa-twitter"></i></a>
                    <a href="<?= $user->instagram ? $user->instagram : '#' ?>"><i class="text-primary mx-2 fa-brands fa-instagram"></i></a>

                </div>

                <?php if ($user->video_url): ?>
                    <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#youtubeModal">
                    <p class="text-primary text-center fw-light mt-5 mb-3">
                            <span class="fw-bold">Video</span> Presentación
                        </p>
                        <p class="text-center mb-1">
                            <img src="/frontend/web/images/icons/youtube-blue.png" width="70px">
                        </p>
                    </a>
                <?php endif ?>
            </div>

            <div class="col-md-6">
                <div>
                    <p class="small text-color mb-0 p-0">Contactos</p>
                    <p class="fw-bold h6 text-color"> <?= $user->phone ?></p>

                    <p class="small text-color mt-4 mb-0 p-0 ">Correo Electrónico:</p>
                    <p class="fw-bold h6 text-color mb-"> <?= $user->email ?></p>

                    <p class="small mt-4">
                        <img src="/frontend/web/images/icons/message.svg" width="35px" class="mr-2">
                        WHATSAPP
                    </p>
                </div>

                <div class="row mt-3">
                    <div class="col-md-8 mt-2">
                        <p class="text-primary fw-bold mb-1">Nombre</p>
                        <input type="text" class="form-control rounded-2">
                    </div>
                    <div class="col-md-8 mt-2">
                        <p class="text-primary fw-bold mb-1">Correo</p>
                        <input type="text" class="form-control rounded-2">
                    </div>
                    <div class="col-md-8 mt-2">
                        <p class="text-primary fw-bold mb-1">Telefono</p>
                        <input type="text" class="form-control rounded-2">
                    </div>
                    <div class="col-md-10 mt-2">
                        <p class="text-primary fw-bold mb-1">Telefono</p>
                        <textarea name="" id="" cols="30" rows="5" class="form-control rounded"></textarea>
                    </div>

                    <div class="col-md-10 text-center mt-3">
                        <a href="" class="btn btn-xs btn-primary bg-primary rounded-3 px-5 font-12">ENVIAR</a>
                    </div>
                </div>
            </div>

        </div>
        <?php ActiveForm::end(); ?>
      </div>
      
    </div>
  </div>
</div>