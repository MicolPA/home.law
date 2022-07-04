<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\DebidaDiligencia;


$dictamen = DebidaDiligencia::find()->where(['propiedad_id' => $model->id])->one();

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
    #myCarousel .carousel-item{
        max-height: 420px;
    }

    #slideModal .carousel-item{
        max-height: 600px;
    }

    .carousel-item img{
        width: 100%;
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

    .a2a_default_style a{
        display: inline-flex !important;
        position: unset !important;
        float: unset !important;
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
                            <a data-bs-toggle="modal" data-bs-target="#shareModal"><img src="/frontend/web/images/icons/compartir.svg" width="28px" class="mr-4 ml-2"></a>
                            
                            <a data-bs-toggle="modal" data-bs-target="#slideModal1"><img src="/frontend/web/images/icons/descargar.svg" width="28px" class="mr-4 ml-2"></a>
                            <a data-bs-toggle="modal" data-bs-target="#slideModal"><img src="/frontend/web/images/icons/ampliar.svg" width="28px" class="mr-4 ml-2"></a>
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
                                <div class="col-1 mobile-hidden"></div>
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
                           <a class="carousel-control-next controlNext opacity-100 bg-white" href="#" role="button" data-slide="next">
                                <!-- <i class="fas fa-chevron-right text-primary fa-2x font-weight-bold"></i>
                                <span class="sr-only">Next</span> -->
                                <img src="/frontend/web/images/icons/boton.svg" width="120px">
                            </a> 
                        <?php endif ?>
                        <input type="hidden" id='item' value="0">
                    </div>


                </div> <!-- /carousel-row -->
            </div>
        </div>

       <div class="row px-3 mt-5">
           <div class="col-md-12">
                <div class="mb-5">
                    <h5 class="text-primary fw-lighter h5">
                       <span class="fw-normal">PRECIO</span>
                       <h3 class="text-primary">USD$<?= number_format($model->precio, 2) ?></h3>
                    </h5>
                   
                </div>
            </div>
        </div>
        <div class="row px-3 mt-2">
            <div class="col-md-12">
                <h2 class="text-primary fw-lighter h4">
                   <span class="fw-bold">Detalles</span> de la propiedad
               </h2>
               <div class="row">
                   <div class="col-md-9">
                       <p class="mt-4 text-secondary">
                            <?= $model->detalles ?>
                        </p>
                   </div>
                   <div class="col-md-3 font-family-2">
                        <div class="mt-3">
                           <a href="#" class="text-decoration-none fw-normal text-primary" data-bs-toggle="modal" data-bs-target="#contactAgente">
                               <img src="/frontend/web/images/icons/message.svg" width="35px" class="mr-2">
                               CONTACTAR AGENTE
                           </a>
                       </div>
                       <!-- <div class="mt-2">
                           <a href="#" class="text-decoration-none fw-normal text-primary">
                               <span class="btn btn-icon btn-sm btn-round text-white bg-primary mr-2"><i class="fa-solid fa-comment-dots"></i></span> 
                               CONTACTAR AGENTE
                           </a>
                       </div> -->
                       <div class="mt-3">
                           <a href="/frontend/web/tasas-hipotecarias" class="text-decoration-none fw-normal text-primary" >
                               <img src="/frontend/web/images/icons/tasas.svg" width="35px" class="mr-2">
                               TASAS HIPOTECARIAS
                           </a>
                       </div>
                       <!-- <div class="mt-3">
                           <a href="/frontend/web/tasas-hipotecarias" class="text-decoration-none fw-normal text-primary">
                               <span class="btn btn-icon btn-sm btn-round text-white icons-gray mr-2"><i class="fa-solid fa-chart-line"></i></span> 
                               TASAS HIPOTECARIAS
                           </a>
                       </div> -->
                       <?php if ($dictamen): ?>
                        <div class="mt-3">
                           <a href="/frontend/web/propiedades/debida-diligencia/?id=<?= $model->id ?>" class="text-decoration-none fw-normal text-primary" target="_blank">
                               <img src="/frontend/web/images/icons/arrow-down-2.svg" width="35px" class="mr-2">
                                DEBIDA DILIGENCIA
                           </a>
                       </div>
                           <!-- <div class="mt-3">
                               <a href="/frontend/web/propiedades/debida-diligencia/?id=<?//= $model->id ?>" class="text-decoration-none fw-normal text-primary" target="_blank">
                                   <span class="btn btn-icon btn-sm btn-round text-white icons-gray mr-2"><i class="fa-solid fa-arrow-down-long px-1"></i></span> 
                                   DEBIDA DILIGENCIA
                               </a>
                           </div> -->
                       <?php endif ?>
                       <div class="mt-3">
                           <a href="#" class="text-decoration-none fw-normal text-primary">
                               <img src="/frontend/web/images/icons/cross.svg" width="35px" class="mr-2">
                               OFERTAS RECHAZADAS
                           </a>
                       </div>
                       <div class="mt-3 border-top border-bottom border-1 py-2 border-primary">
                            <button type="button" class="btn btn-primary btn-block w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              HACER UNA OFERTA
                            </button>
                       </div>
                   </div>
               </div>
           </div>
           
       </div>
       <div class="row mt-5 pt-5  pb-5 px-3">
           <div class="col-md-12">
               <h2 class="text-primary fw-lighter h4 mb-5">
                   <span class="fw-bold">Características</span> de la propiedad
               </h2>

               <div class="row text-secondary">
                    <div class="col-md-9">
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
<?php 

$components = parse_url($model->video_url, PHP_URL_QUERY);
//$component parameter is PHP_URL_QUERY
parse_str($components, $results);
$yt_url = isset($results['v']) ? $results['v'] : null;

 ?>
<?php if ($yt_url): ?>
<div class="bg-lightgray p-4">
    <div class="container">
        <div class="row align-items-center pt-5 mb-5 pb-5">
            <div class="col-md-12 mb-4">
                <h2 class="text-primary fw-lighter h4 text-center">
                   <span class="fw-bold">Video</span> de la propiedad
                </h2>
            </div>

            <div class="col-md-10 m-auto">
                <div>
                    <iframe width="100%" height="465" src="https://www.youtube.com/embed/<?= $yt_url ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 25px;"></iframe>
                </div>
            </div>
            <!-- <div class="col-md-1"></div>
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
            </div> -->
        </div>
    </div>
</div>

<?= $this->render('_comments', ['propiedad_id' => $model->id]) ?>

<?php endif ?>



<?= $this->render('_modal_prop', ['model' => $model, 'fotos' => $fotos]) ?>
<?= $this->render('_modal_oferta', ['precio' => $model->precio, 'id' => $model->id]) ?>
<?= $this->render('_modal_contactat_agente', ['agente_id' => $model->assigned_to_user_id]) ?>
