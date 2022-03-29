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
<div class="bg-white">
    <div class="container-sm py-0">

        <div class="row">
            <div class="col-md-12">
                <div class="carousel-container position-relative row">
                  
                    <div id="myCarousel" class="carousel slide first-part w-100" data-ride="carousel">

                      <div class="carousel-inner">
                         
                        <div class="carousel-item rounded active" data-slide-number="0">
                          <img src="/frontend/web/<?= $model->portada ?>" class="d-block w-100 rounded" data-remote="/frontend/web/<?= $model->portada ?>" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                        </div>
                        <?php $count = 0; ?>
                        <?php foreach ($fotos as $foto): ?>
                            <?php $count++ ?>
                            <div class="carousel-item rounded" data-slide-number="<?= $count ?>">
                              <img src="/frontend/web/<?= $foto ?>" class="d-block w-100 rounded" data-remote="/frontend/web/<?= $foto ?>" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                        <?php endforeach ?>
                        <!-- Button trigger modal -->
                        
                      </div>
                      
                    </div>

                    <div class="row my-3">
                        <div class="col-md-6">
                            <h1 class="fs-4 text-primary"><?= $this->title ?></h1>
                            <span class="text-muted fs-5"><?= $model->ubicacion->nombre ?></span>
                        </div>
                        <div class="col-md-6">
                            <div class="row p-3 text-secondary h5 text-end">
                                <div class="col-1"></div>
                                <div class="col-2 text-center border-3 p-1">
                                    <div>
                                        <i class="fa-solid fa-car-side mr-1"></i>
                                        <?= $model->parqueos ?>
                                    </div>
                                </div>
                                <div class="col-2 text-center border-3 p-1">
                                    <div>
                                        <i class="fa-solid fa-bath mr-1"></i>
                                        <?= $model->baños ?>
                                    </div>
                                </div>
                                <div class="col-2 text-center border-3 p-1">
                                    <div>
                                        <i class="fa-solid fa-bed mr-1"></i>
                                        <?= $model->habitaciones ?>
                                    </div>
                                </div>
                                <div class="col-2 border-3 p-1">
                                    <div>
                                        <i class="fa-solid fa-ruler-combined"></i>
                                        <small><?= $model->metros ?>M<sup>2</sup></small>
                                    </div>
                                </div>
                                <div class="col-3 border-3 p-1 text-end">
                                    <div>
                                        <small class="text-danger fw-bold">NO.<?= $model->codigo ?></small>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Navigation -->
                    <div id="carousel-thumbs" class="carousel slide bg-white rounded-bottom" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row mx-0">
                            <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                              <img src="/frontend/web/<?= $model->portada ?>" class="img-fluid">
                            </div>
                            <?php $count = 0; ?>
                            <?php foreach ($fotos as $foto): ?>
                                <?php $count++ ?>
                                <?php if ($count <= 5): ?>
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
                                <?php if ($count > 5): ?>
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
                      <?php if (count($fotos) > 5): ?>
                          <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="<?= count($fotos) > 5 ? "prev" : "" ?>">

                            <i class="fas fa-chevron-left text-blue fa-2x font-weight-bold float-left"></i>
                            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="<?= count($fotos) > 5 ? "next" : "" ?>">
                            <i class="fas fa-chevron-right text-blue fa-2x font-weight-bold"></i>
                            <span class="sr-only">Next</span>
                          </a>
                      <?php endif ?>
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
                   <div class="col-md-4 font-family-2">
                       <div class="mt-2">
                           <a href="#" class="text-decoration-none fw-bold text-primary">
                               <span class="btn btn-icon btn-sm btn-round text-white bg-primary mr-2"><i class="fa-solid fa-comment-dots"></i></span> 
                               CONTACTAR AGENTE
                           </a>
                       </div>
                       <div class="mt-3">
                           <a href="#" class="text-decoration-none fw-bold text-primary">
                               <span class="btn btn-icon btn-sm btn-round text-white bg-gray mr-2"><i class="fa-solid fa-chart-line"></i></span> 
                               TASAS HIPOTECARIAS
                           </a>
                       </div>
                       <div class="mt-3">
                           <a href="#" class="text-decoration-none fw-bold text-primary">
                               <span class="btn btn-icon btn-sm btn-round text-white bg-gray mr-2"><i class="fa-solid fa-arrow-down-long px-1"></i></span> 
                               DESCARGAR DICTAMEN
                           </a>
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
        <div class="row pt-5 mb-5 pb-5">
            <div class="col-md-12 mb-4">
                <h2 class="text-primary fw-lighter h4 text-center">
                   <span class="fw-bold">Recorrido 360</span> en la propiedad
                </h2>
            </div>

            <div class="col-md-10 m-auto">
                <div class="p-3">
                    <img src="/frontend/web/images/ejemplo-360.jpg" width="100%" class="rounded">
                </div>
            </div>
        </div>
    </div>
</div>