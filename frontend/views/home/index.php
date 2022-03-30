<?php 
    
    $this->title = "Inicio";
 ?>

 <style>
     .carousel-control-prev, .carousel-control-next{
        position: relative;
     }
 </style>

<div class="container-fluid px-0 py-4">
    <div class="row w-100 m-0">
        <div class="col-md-7 col-xs-12 pt-md-4">
            <div class="container">
                <p class="text-center mb-0 lh-1">
                    <span class="fw-bold fs-3 text-primary -ml-3 mb-0">Find the best property</span>
                    <p class="text-center fs-3 pl-5 lh-1 text-primary fw-light">for your investment</p>
                </p>

                <form class="card w-60 m-auto rounded-2 p-5">
                    <div class="mb-3 mt-5">
                        <label for="tagInput" class="form-label">¿Qué buscas?</label>
                        <input type="text" class="form-control" id="tagInput" placeholder="Apartamento, casa. terreno...">
                    </div>
                    <div class="mb-3">
                        <label for="locationInput" class="form-label">¿Donde?</label>
                        <input type="text" class="form-control" id="locationInput" placeholder="Apartamento, casa. terreno...">
                    </div>
                    <div class="mt-3 mb-5 text-center">
                        <button type="submit" class="btn btn-lg btn-danger rounded-3 pl-4 pr-4">Buscar <i class='fa-solid fa-magnifying-glass ml-2'></i> </button>
                    </div>
                    <p class="text-secondary small text-center fw-bold-2">BÚSQUEDA AVANZADA</p>
                </form>      
            </div>
        </div>
        <div class="col-md-5 p-0 mobile-hidden">
            <div class="home-banner">
                
            </div>
        </div>
        
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <div class="col-md-12 text-center pt-lg-5">
            <p class="text-primary h4 mb-lg-5">
                <span class="fw-bold">Best </span> Property
            </p>
        </div>
        <div id="carouselProp" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselProp" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselProp" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <?php if (count($propiedades) > 8): ?>
                    <button type="button" data-bs-target="#carouselProp" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <?php endif ?>
            </div>
          <div class="carousel-inner">
            <div class="carousel-item active ">
                <div class="row">
                    <?php $count = 0; ?>
                    <?php foreach ($propiedades as $propiedad): ?>
                        <?php $count++ ?>
                        <?php if ($count <= 4): ?>
                            <?= $this->render('/propiedades/_grid_propiedades', ['propiedad' => $propiedad]) ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <?php $count = 0; ?>
                    <?php foreach ($propiedades as $propiedad): ?>
                        <?php $count++ ?>
                        <?php if ($count > 4 and $count < 9): ?>
                            <?= $this->render('/propiedades/_grid_propiedades', ['propiedad' => $propiedad]) ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
            <?php if (count($propiedades) > 8): ?>
            <div class="carousel-item">
                <div class="row">
                    <?php $count = 0; ?>
                    <?php foreach ($propiedades as $propiedad): ?>
                        <?php $count++ ?>
                        <?php if ($count > 8): ?>
                            <?= $this->render('/propiedades/_grid_propiedades', ['propiedad' => $propiedad]) ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
            <?php endif ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselProp" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselProp" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
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
                
                <div class="text-center">
                    <p class="text-center mb-0 lh-1">
                        <span class="fw-bold fs-2 text-primary -ml-3 mb-0">¿Quieres publicar</span>
                        <p class="text-center fs-2 pl-5 lh-1 text-primary fw-light mb-5">tu propiedad?</p>
                    </p>

                    <a href="#" class="btn btn-md btn-danger rounded-3 pl-4 pr-4 mb-5">SOLICITUD DE PROPIEDAD</a>
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
            <p class="text-primary h4 mb-lg-5">
                <span class="fw-bold">Best </span> Property
            </p>
        </div>
    </div>
    <div class="row align-items-center pb-5">
        <div class="col-1 text-c">
            <button class="carousel-control-prev text-primary fs-2 float-md-end" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <i class="fa-solid fa-angle-left"></i>
            </button>
        </div>
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
                                    <div class="prop-card-img" style="background-image: url('/frontend/web/<?= $u->portada ?>');"></div>
                                    <p class="text-center text-secondary font-14 mt-2"><?= mb_strtoupper($u->nombre) ?></p>
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
                                    <div class="prop-card-img" style="background-image: url('/frontend/web/<?= $u->portada ?>');"></div>
                                    <p class="text-center text-secondary font-14 mt-2"><?= mb_strtoupper($u->nombre) ?></p>
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

