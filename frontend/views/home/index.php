<?php 
    
    $this->title = "Inicio";
    $url = \frontend\models\Constantes::find()->where(['nombre' => 'home_video'])->one();;

    $components = parse_url($url['contenido'], PHP_URL_QUERY);
    //$component parameter is PHP_URL_QUERY
    parse_str($components, $results);
    $yt_url = isset($results['v']) ? $results['v'] : null;
 ?>

 <style>
     .carousel-control-prev, .carousel-control-next{
        position: relative;
     }

     .outer {
      position: relative;
      margin-top: 20px;
    }

    .top {
      position: absolute;
      margin-top: -10px;
    }

    .bot {
      position: absolute;
    }
    
    
    .video-container iframe, {
      pointer-events: none;
    }
    .video-container iframe{
      position: absolute;
      top: -60px;
      left: 0;
      width: 100%;
      height: calc(100% + 120px);
    }
    .video-foreground{
      pointer-events:none;
    }
    .html5-video-player{
      background-color: #fff;
    }

    @media (min-aspect-ratio: 16/9) {
      .video-foreground { height: 300%; top: -100%; }
    }
    @media (max-aspect-ratio: 16/9) {
      .video-foreground { width: 300%; left: -100%; }
    }


        /*.html5-video-player a {display: none !important; }*/
 </style>
 <script>
     setTimeout(function(){
       
         // {pointer-events: none !important; }
     },500)
 </script>

<div class="container-fluid home-banner-container bg-gray-2 p-0 mt-0 outer" style="margin-bottom: 12rem !important;">

    <div class="row w-100 bot mobile-hidden" style="width:100vw !important;background: #000;margin-top: -2rem;max-height: 600px;overflow: hidden;">
        <div class="col-md-12 video-foreground" style="background:#e5e5e5;margin-top: -100px;">
            <!-- <iframe width="100%" height="850" src="https://www.youtube.com/embed/G6KBwzjbs7w?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=G6KBwzjbs7w&mute=1" frameBorder="0" allowFullScreen allow="fullscreen;" allowfullscreen="allowfullscreen" allowfullscreen="allowfullscreen" allowfullscreen="true"></iframe> -->
            <iframe type="text/html" src="https://www.youtube-nocookie.com/embed/<?= $yt_url ?>?version=3&enablejsapi=1&html5=1&hd=1&wmode=opaque&showinfo=0&rel=0&mute=1&controls=0&playsinline=1&playlist=<?= $yt_url ?>&autoplay=1&loop=1" frameborder="0" width="100%" height="828" style="background:white !important"></iframe>
        </div>
    </div>
    <div class="row w-100 m-0" style="background:#eeeff0">
        <div class="col-lg-6 col-md-8 col-xs-12 pt-md-4">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-10 col-sm-12">
                        <form class="card home-card w-75 float-md-end rounded-2 p-5 mt-3" action="/frontend/web/propiedades">
                            <div class="row">
                                <div class="col-md-11 col-sm-12">
                                    <p class="text-center mb-0">
                                        <span class="fw-bold fs-4 text-primary -ml-2 mb-0">Find the best property</span>
                                        <p class="text-center fs-4 pl-5 lh-1 text-primary fw-light">for your investment </p>
                                    </p>

                                    <div class="mb-3 mt-5">
                                        <label for="tagInput" class="form-label fw-bold text-primary">¿Qué buscas?</label>
                                        <input type="text" class="form-control rounded" name="keyword" id="tagInput" placeholder="Apartamento, casa. terreno...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="locationInput" class="form-label fw-bold text-primary">¿Donde?</label>
                                        <input type="text" class="form-control rounded" name="keyplace" id="locationInput" placeholder="Apartamento, casa. terreno...">
                                    </div>
                                    <div class="mt-3 mb-5 text-center">
                                        <button type="submit" class="btn btn-lg btn-danger rounded-3 pl-4 pr-4">Buscar <i class='fa-solid fa-magnifying-glass ml-2'></i> </button>
                                    </div>
                                    <!-- <p class="text-secondary small text-center fw-bold-2">BÚSQUEDA AVANZADA</p> -->
                                    </div>

                               

                                <div class="col-1 pt-5 mt-2 mobile-hidden">
                                    <img src="/frontend/web/images/icons/arrow-home-2.svg" width="35px">
                                </div>
                            </div>

                            
                        </form> 
                    </div>
                    
                </div>
                     
            </div>
        </div>
        <!-- <div class="col-md-6 p-0 mobile-hidden pl-4">

            <div id="carouselExampleControls" class="carousel slide carousel-fade main-carousel" tabindex="0" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/frontend/web/images/banner.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/frontend/web/images/banner-4.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="/frontend/web/images/banner-3.png" class="d-block w-100">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div> -->
        
    </div>
</div>

<div class="container pb-5">
    <div class="row px-5">
        <div class="col-md-12 text-center">
            <p class="text-primary h3 mb-lg-5 mt-5">
                <span class="fw-bold">Best </span> <span class="fw-lighter">Property</span>
            </p>
        </div>
        <?php foreach ($propiedades as $propiedad): ?>
                <?= $this->render('/propiedades/_grid_propiedades', ['propiedad' => $propiedad, 'count' => 1]) ?>
        <?php endforeach ?>
        
    </div>

</div>

<div class="container-fluid px-0 mt-5 pt-5">
    <div class="row align-items-center w-100 m-0 bg-white" style="max-height: 550px;">
        <div class="col-md-7 p-0 mobile-hidden">
            <div class="home-banner-2">
                
            </div>
        </div>
        <div class="col-md-5 col-xs-12 py-4">
            <div class="container">
                
                <div class="row">
                    <div class="col-10">
                        <div class="text-end">
                            <p class=" mb-0 lh-1">
                                <span class="fw-bold fs-2 text-primary -ml-3 mb-0">¿Quieres publicar</span>
                                <p class="text-end fs-2 pl-5 lh-1 text-primary fw-light mb-5">tu propiedad?</p>
                            </p>

                            <a href="#" class="btn btn-md btn-danger rounded-3 pl-4 pr-4 mb-5">SOLICITUD DE PROPIEDAD</a>
                        </div>
                    </div>
                    <div class="col-1 pt-5">
                        <img src="/frontend/web/images/icons/arrow-home-2.svg" width="30px">
                    </div>
                </div>

                <p class="mt-2 text-muted small">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aspernatur, vitae porro soluta consequuntur natus mollitia distinctio commodi aliquid omnis. Velit dicta dolores sapiente adipisci quos magni tempore, officiis error.
                </p>

                
            </div>
        </div>
        
        
    </div>
</div>


<div class="container pb-5 mt-5">
    <div class="row mt-5 pt-5">
        <div class="col-md-12 text-center pt-lg-5">
            <p class="text-primary h3 mb-lg-5">
                <span class="fw-bold">Best </span> <span class="fw-lighter">Place</span>
            </p>
        </div>
    </div>
    <div class="row align-items-center pb-5">
        <div class="col-1 text-c">
            <button class="carousel-control-prev text-primary fs-2 float-md-end" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <i class="fa-solid fa-angle-left"></i>
            </button>
        </div>
        <!-- /frontend/web/propiedades/index?PropiedadesSearch%5Bubicacion_id%5D=1 -->
        <div class="col-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <?php $count = 0; ?>
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <?php foreach ($ubicaciones as $u): ?>
                            <?php $u->portada = !$u->portada ? 'images/ejemplo-360.jpg' : $u->portada ?>
                            <?php $count++ ?>
                            <?php if ($count <= 4): ?>
                                <div class="col-md-3 p-0">
                                    <a class="text-decoration-none" href="/frontend/web/propiedades/index?PropiedadesSearch%5Bubicacion_id%5D=<?= $u->id ?>">
                                        <div class="prop-card-img" style="background-image: url('/frontend/web/<?= $u->portada ?>');"></div>
                                        <p class="text-center text-secondary font-14 mt-2"><?= mb_strtoupper($u->nombre) ?></p>
                                    </a>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                </div>
                <?php $count = 0; ?>
                <div class="carousel-item">
                    <div class="row">
                        <?php foreach ($ubicaciones as $u): ?>
                            <?php $u->portada = !$u->portada ? 'images/ejemplo-360.jpg' : $u->portada ?>
                            <?php $count++ ?>
                            <?php if ($count > 4): ?>
                                <div class="col-md-3 p-0">
                                    <a class="text-decoration-none" href="/frontend/web/propiedades/index?PropiedadesSearch%5Bubicacion_id%5D=<?= $u->id ?>">
                                        <div class="prop-card-img" style="background-image: url('/frontend/web/<?= $u->portada ?>');"></div>
                                        <p class="text-center text-secondary font-14 mt-2"><?= mb_strtoupper($u->nombre) ?></p>
                                    </a>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                </div>
              </div>
              
              
            </div>
        </div>
        <div class="col-1">
            <button class="carousel-control-next float-md-start" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <i class="fa-solid fa-angle-right text-primary fs-2"></i>
            </button>
        </div>
    </div>

</div>

