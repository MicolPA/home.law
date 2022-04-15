<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$fotos = array();
for ($i = 2; $i < 13; $i++) {
    
    if ($galeria["foto_$i"]) {
        $fotos[] = $galeria["foto_$i"];
    }
}
$this->title = $model->titulo_publicacion;
\yii\web\YiiAsset::register($this);
?>
<style>
    .carousel-item{
        max-height: 420px;
    }

    .carousel-inner{
       border-bottom-right-radius: 0.6rem !important;
        border-bottom-left-radius: 0.6rem !important; 
    }
    .container{
        max-width: 1100px !important;
    }
    .container-sm{
        max-width: 970px !important;
    }

    .my-svg{
        display: none
    }

    main{
        padding-bottom: 0px !important;
    }
</style>
<div class="bg-white">
    <div class="container-sm py-0">

        <div class="row">
            <div class="col-md-12">
                <div class="carousel-container position-relative row">
                  
                    <div id="myCarousel" class="carousel slide first-part w-100" data-ride="carousel">

                      <div class="carousel-inner position-relative">
                         
                        <div class="carousel-item rounded active" data-slide-number="0">
                          <img src="/frontend/web/<?= $model->portada ?>" class="d-block w-100 prop-gallery-img" data-remote="/frontend/web/<?= $model->portada ?>" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        </div>
                        <?php $count = 0; ?>
                        <?php foreach ($fotos as $foto): ?>
                            <?php $count++ ?>
                            <div class="carousel-item rounded" data-slide-number="<?= $count ?>">
                              <img src="/frontend/web/<?= $foto ?>" class="d-block w-100 prop-gallery-img" data-remote="/frontend/web/<?= $foto ?>" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                        <?php endforeach ?>
                        <!-- Button trigger modal -->

                        <div class="position-absolute bottom-0 end-0 gallery-icons px-3 py-3 text-center">
                            <img src="/frontend/web/images/icons/compartir.svg" width="28px" class="mr-4 ml-2">
                            <img src="/frontend/web/images/icons/descargar.svg" width="28px" class="mr-4">
                            <img src="/frontend/web/images/icons/ampliar.svg" width="28px" class="mr-4">
                        </div>
                      </div>
                      
                    </div>

                    <div class="row my-3 px-4">
                        <div class="col-md-5">
                            <h1 class="h5 text-primary mb-0 fw-bold"><?= $this->title ?></h1>
                            <span class="text-light-gray h5 fw-normal"><?= $model->ubicacion->nombre ?></span>
                        </div>
                        <div class="col-md-7">
                            <div class="row align-items-center py-3 text-secondary h5 text-end">
                                <div class="col-1"></div>
                                <div class="col-2 text-center border-3 p-0">
                                    <div>
                                        <img class="mr-1" src="/frontend/web/images/icons/parqueo.svg" width="28px">
                                        <?= $model->parqueos ?>
                                    </div>
                                </div>
                                <div class="col-2 text-center border-3 p-0">
                                    <div>
                                        <img class="mr-1" src="/frontend/web/images/icons/bath.svg" width="28px">
                                        <?= $model->baños ?>
                                    </div>
                                </div>
                                <div class="col-2 text-center border-3 p-0">
                                    <div>
                                        <img class="mr-1" src="/frontend/web/images/icons/habitacion.svg" width="28px">
                                        <?= $model->habitaciones ?>
                                    </div>
                                </div>
                                <div class="col-3 border-3 p-0 text-center">
                                    <div>
                                        <img class="mr-1" src="/frontend/web/images/icons/Terreno.svg" width="30px">
                                        <small class="small"><?= $model->metros ?>M<sup>2</sup></small>
                                    </div>
                                </div>
                                <div class="col-2 border-3 p-0 text-center">
                                    <div>
                                        <small class="text-danger fw-bold">NO.<?= $model->codigo ?></small>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Navigation -->
                    <div id="carousel-thumbs" class="carousel slide bg-white rounded-bottom px-4" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row mx-0">
                            <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                              <img src="/frontend/web/<?= $model->portada ?>" class="img-fluid">
                            </div>
                            <?php $count = 0; ?>
                            <?php foreach ($fotos as $foto): ?>
                                <?php $count++ ?>
                                <?php if ($count <= 4): ?>
                                    <div id="carousel-selector-<?= $count ?>" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="<?= $count ?>">
                                      <img src="/frontend/web/<?= $foto ?>" class="img-fluid">
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                            
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row mx-0">
                            <?php $count = 0; ?>
                            <?php foreach ($fotos as $foto): ?>
                                <?php $count++ ?>
                                <?php if ($count > 4 and $count < 10): ?>
                                    <div id="carousel-selector-<?= $count ?>" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="<?= $count ?>">
                                      <img src="/frontend/web/<?= $foto ?>" class="img-fluid">
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                            <div class="col-2 px-1 py-2"></div>
                            <div class="col-2 px-1 py-2"></div>
                          </div>
                        </div>
                      </div>
                        <!-- <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">

                            <i class="fas fa-chevron-left text-primary fa-2x font-weight-bold float-left"></i>
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a> -->
                        <?php if (count($fotos) > 4): ?>
                           <a class="carousel-control-next opacity-100" href="#" role="button" data-slide="next">
                                <!-- <i class="fas fa-chevron-right text-primary fa-2x font-weight-bold"></i>
                                <span class="sr-only">Next</span> -->
                                <img src="/frontend/web/images/icons/boton.svg" width="80%">
                            </a> 
                        <?php endif ?>
                        <input type="hidden" id='item' value="0">
                    </div>

                </div> <!-- /carousel-row -->
            </div>
        </div>
       
       <div class="row mt-5 pt-5">
           <div class="col-md-12">
               <h2 class="text-primary fw-lighter h4">
                   <span class="fw-bold">Detalles</span> de la propiedad
               </h2>

               <div class="row">
                   <div class="col-md-8">
                       <p class="mt-4 text-secondary">
                            <?= $model->detalles ?>
                        </p>
                   </div>
                   <div class="col-md-3 font-family-2">
                       <div class="mt-2">
                           <a href="#" class="text-decoration-none fw-bold text-primary">
                               <span class="btn btn-icon btn-sm btn-round text-white bg-primary mr-2"><i class="fa-solid fa-comment-dots"></i></span> 
                               CONTACTAR AGENTE
                           </a>
                       </div>
                       <div class="mt-3">
                           <a href="#" class="text-decoration-none fw-bold text-primary">
                               <span class="btn btn-icon btn-sm btn-round text-white icons-gray mr-2"><i class="fa-solid fa-chart-line"></i></span> 
                               TASAS HIPOTECARIAS
                           </a>
                       </div>
                       <div class="mt-3">
                           <a href="#" class="text-decoration-none fw-bold text-primary">
                               <span class="btn btn-icon btn-sm btn-round text-white icons-gray mr-2"><i class="fa-solid fa-arrow-down-long px-1"></i></span> 
                               DESCARGAR DICTAMEN
                           </a>
                       </div>
                       <div class="mt-3 border-top border-bottom border-2 py-2">
                            <button type="button" class="btn btn-primary btn-block w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              HACER UNA OFERTA
                            </button>
                       </div>
                   </div>
               </div>
           </div>
           
       </div>
       <div class="row mt-5 pt-5  pb-5">
           <div class="col-md-12">
               <h2 class="text-primary fw-lighter h4 mb-5">
                   <span class="fw-bold">Características</span> de la propiedad
               </h2>

               <div class="row text-secondary">
                    <div class="col-md-8">
                        <div class="row">
                            <?php foreach (explode(',', $model->extra_text) as $extra): ?>
                                <div class="col-md-6">
                                    <p><?= $extra ?></p>
                                </div>    
                            <?php endforeach ?>
                        </div>
                    </div>
               </div>
           </div>
           
       </div>
        

    </div>
</div>

<div class="bg-lightgray p-4">
    <div class="container">
        <div class="row align-items-center pt-5 mb-5 pb-5">
            <div class="col-md-12 mb-4">
                <h2 class="text-primary fw-lighter h4 text-center">
                   <span class="fw-bold">Recorrido 360</span> en la propiedad
                </h2>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-10 col-10">
                <div class="p-3">
                    <img src="/frontend/web/images/ejemplo-360.jpg" width="100%" class="rounded">
                </div>
            </div>
            <div class="col-md-1 col-1">
                <div class="mb-2">
                    <a href="#" class="text-decoration-none fw-bold text-primary ">
                       <span class="btn btn-icon btn-sm btn-round text-white bg-primary"><i class="fa-solid fa-arrow-up"></i></span> 
                    </a>
                </div>
                <div class="mb-2">
                    <a href="#" class="text-decoration-none fw-bold text-primary mb-2">
                       <span class="btn btn-icon btn-sm btn-round text-white icons-gray"><img src="/frontend/web/images/icons/ampliar.svg" width="12px"></span> 
                    </a>
                </div>
                <div class="mb-2">
                    <a href="#" class="text-decoration-none fw-bold text-primary">
                       <span class="btn btn-icon btn-sm btn-round text-white bg-primary"><i class="fa-solid fa-arrow-down"></i></span> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->render('_modal_contactat_agente', ['precio' => $model->precio]) ?>
