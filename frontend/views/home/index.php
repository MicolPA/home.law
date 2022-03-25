<?php 
    
    $this->title = "Inicio";
 ?>

<div class="container-fluid px-0 py-4">
    <div class="row w-100 m-0">
        <div class="col-md-7 col-xs-12 pt-md-4">
            <div class="container">
                <p class="text-center mb-0 lh-1">
                    <span class="fw-bold fs-3 text-primary -ml-3 mb-0">Find the best property</span>
                    <p class="text-center fs-3 pl-5 lh-1 text-primary fw-light">for your investment</p>
                </p>


                <div class="card w-60 m-auto rounded-2 p-5">
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
                </div>      
            </div>
        </div>
        <div class="col-md-5 p-0 mobile-hidden">
            <div class="home-banner">
                
            </div>
        </div>
        
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center pt-lg-5">
            <p class="text-primary h4 mb-lg-5">
                <span class="fw-bold">Best </span> Property
            </p>
        </div>

        <?php foreach ($propiedades as $p): ?>
            <div class="col-md-3 text-center mb-3">
                <div class="card rounded-1 p-3">
                    <img class="rounded-1" src="<?= Yii::getAlias('@web') ?>/images/casa.jpg" width="100%">
                    <span class="text-center prop-title">
                        <span class="badge rounded-pill bg-primary text-white py-2 px-3"><?= $p->titulo_publicacion ?></span>
                        <p class="small text-secondary mb-0"><?= $p->ubicacion->nombre ?></p>
                    </span>
                    <div class="row p-3 text-secondary small text-center">
                        <div class="col-3 border-3 border-bottom border-end p-1">
                            <div>
                                <i class="fa-solid fa-car-side mr-1"></i>
                                <?= $p->parqueos ?>
                            </div>
                        </div>
                        <div class="col-3 border-3 border-bottom border-end p-1">
                            <div>
                                <i class="fa-solid fa-bath mr-1"></i>
                                <?= $p->baños ?>
                            </div>
                        </div>
                        <div class="col-3 border-3 border-bottom border-end p-1">
                            <div>
                                <i class="fa-solid fa-bed mr-1"></i>
                                <?= $p->habitaciones ?>
                            </div>
                        </div>
                        <div class="col-3 border-3 border-bottom p-1">
                            <div>
                                <i class="fa-solid fa-ruler-combined"></i>
                                <small style="font-size: 9px;"><?= $p->metros ?>M<sup>2</sup></small>
                            </div>
                        </div>
                        
                    </div>
                    <div class="prop-venta">
                        <p class="text-primary fw-bold text-center">VENTA</p>
                    </div>
                    <p class="rounded rounded-pill m-auto bg-danger text-white py-1 w-100 h5">US$<?= number_format($p->precio) ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron" style="height:600px"></div>
        </div>
    </div>
</div>