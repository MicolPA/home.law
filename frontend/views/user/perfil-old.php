<?php 

$this->title = "$model->first_name $model->last_name";

$plantilla = \frontend\models\ProfileTemplates::findOne($model['template_id']);

 ?>
<style>
    main{
        padding-bottom: 0px !important;
    }

    @media (min-width: 1400px){
        .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
            max-width: 1200px !important;
        }
    }
        
</style>
<div class="main-banner-profile w-100" style="background: <?= $plantilla ? $plantilla['banner_background'] : '#0071ba' ?>;">
    <div class="container-fluid  banner-profile">

    </div>
    <!-- <div class="container position-relative position-relative-example  mx-sm-0"> 

        <div class="row">
            <div class="h-100 col-md-12">

                <img class="rounded-circle position-absolute top-100 start-0 translate-middle photo-profile  " src="../../web/images/avatar.jpg" alt="">

            </div>
        </div>
    </div> -->

</div>
<style>

</style>
<div class="custom-template">
    <div class="title bg-primary text-center">Seleccionar Colores</div>
    <div class="custom-content">
        <div class="switcher">
            <?php foreach ($plantillas as $p): ?>
                <style>
                    .btnSwitch button[data-color="white"] {
                        background-color: <?= $p->banner_background ?>;
                    }
                </style>    
                <div class="switch-block">
                    <div class="form-check mb-4 template-labels btnSwitch py-2">
                        <input class="form-check-input templateRadio" type="radio" name="templateRadio" id="template<?= $p->id ?>" value="<?=  $p->id ?>">
                        <label class="form-check-label w-100" for="template<?= $p->id ?>">
                            <h4 class="mb-2 pt-1">Plantilla <?= $p->nombre ?></h4>
                            <button class="changeBackgroundColor" style="background:<?= $p->banner_background ?>;color:<?= $p->banner_background ?>"></button>
                            <button class="changeBackgroundColor" style="background:<?= $p->body_background ?>;color:<?= $p->body_background ?>"></button>
                            <button class="changeBackgroundColor" style="background:<?= $p->body_color ?>;color:<?= $p->body_color ?>"></button>
                         </label>
                    </div>
                </div>
                
            <?php endforeach ?>
        </div>
    </div>
    <?php if (Yii::$app->user->identity->id == $model->id): ?>
    <div class="custom-toggle bg-primary">
        <i class="fa-solid fa-gear"></i>
    </div>
    <?php endif ?>
</div>
<input type="hidden" value="<?= $model->id ?>">

<div class="bg-white w-100">
    <div class="container">
        <div class="row px-0 mx-0  mx-md-5 mx-sm-5  ">
            <div class="col-lg-5 col-sm-12  ">
                <div class="margin-negative avatar-sm px-5 mx-4 fs-4 rounded-circle m-auto" style="width: 150px; height: 150px;background-image: url('<?= Yii::getAlias("@web") . "/". $model->photo_url ?>');background-position: center;background-size: cover;">
                </div>

            </div>
            <div class="col-lg-7"> </div>

        </div>

        <div class="row px-0 mx-0 ">
            <div class="col-lg-5 col-sm-12">
                <div class="pl-2 mt-2 pb-5 mx-2 mx-md-5 fs-4">
                    <a href=""><i class="text-warning  fa-solid fa-star"></i></a>
                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
                    <a href=""><i class="text-warning fa-solid fa-star"></i></a>
                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
                    <a href=""><i class="text-secondary fa-solid fa-star"></i></a>
                </div>


                <p class="fw-bold fs-3 text-primary pt-1 mb-0"> <?= "$model->first_name $model->last_name" ?></p>
                <p class="small text-light-gray mb-2 ">Agente Inmobilario</p>

                <div class="px-5 py-3 fs-3">

                    <a href="<?= $model->facebook ? $model->facebook : '#' ?>"><i class=" text-primary mx-2 fa-brands fa-facebook-f"></i></a>
                    <a href="<?= $model->whatsapp ? $model->whatsapp : '#' ?>"><i class=" text-primary mx-2 fa-brands fa-whatsapp"></i></a>
                    <a href="<?= $model->twitter ? $model->twitter : '#' ?>"><i class=" text-primary mx-2 fa-brands fa-twitter"></i></a>
                    <a href="<?= $model->instagram ? $model->instagram : '#' ?>"><i class=" text-primary mx-2 fa-brands fa-instagram"></i></a>
                </div>

                <p class="small text-light-gray mt-5 mb-0 p-0 ">Contactos</p>
                <p class="fw-bold fs-5 text-primary mb-"> <?= $model->phone ?></p>



                <p class="small text-light-gray mt-4 mb-0 p-0 ">Correo Electrónico:</p>
                <p class="fw-bold fs-5 text-primary mb-"> <?= $model->email ?></p>

                <div class="my-5 pb-5">
                    <a href="#" class="text-decoration-none fw-bold text-primary">
                       <span class="btn btn-icon btn-sm btn-round text-white bg-danger mr-2" style="font-size:17px !important"><i class="fa-solid fa-comment-dots"></i></span> 
                       CONTACTAR AGENTE
                   </a>

                </div>
            </div>

            <div class="col-lg-7 py-0 my-0 py-sm-5 my-sm-5    ">


                <p class="text-primary fs-5  mt-0 mb-5 mt-md-5 mt-sm-5  ">
                    <span class="fw-bold">Reseña </span> Personal
                </p>

                <p class="small text-light-gray mb-2">
                    <?= $model->descripcion ?>
                </p>


                
                <?php 

                    $url = $model->video_url;
                    $components = parse_url($url, PHP_URL_QUERY);
                    //$component parameter is PHP_URL_QUERY
                    parse_str($components, $results);
                    $yt_url = isset($results['v']) ? $results['v'] : null;

                ?>
                <?php if ($yt_url): ?>

                <p class="text-primary fs-5 my-5">
                    <span class="fw-bold">Video </span> presentación
                </p>
                <div class="mb-3 ">
                    <iframe class="rounded pb-0 youtube-video" width="360" height="215" src="https://www.youtube.com/embed/<?= $yt_url ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php endif ?>


            </div>


        </div>

    </div>



    <div class="py-5 properties-banner-profile"  style="background: <?= $plantilla ? $plantilla['banner_background'] : '#0071ba' ?>;">

        <div class="container pb-5">
            <p class="text-white banner-title fs-5 my-5 text-center">
                <span class="fw-bold">My </span> property
            </p>

            <div class="row">
                

                <?php if (count($propiedades) > 0): ?>
                    <?php foreach ($propiedades as $propiedad) : ?>
                        <?= $this->render('/propiedades/_grid_propiedades', ['propiedad' => $propiedad, 'count' => 1]) ?>
                    <?php endforeach ?>
                <?php else: ?>
                    <p class="text-white text-center">Aún no ha registrado propiedades.</p>
                <?php endif ?>


            </div>
        </div>
    </div>