
<div class="col-lg-3 text-center mb-3 col-md-12 <?= in_array($count, array(1,5,9)) ? '' : 'mobile-hidden'  ?>">
    <a class="text-decoration-none" href="/frontend/web/propiedades/ver/<?= $propiedad->id ?>">
        <div class="card ">
            <div class=" prop-card-img" style="background-image: url('/frontend/web/<?= $propiedad->portada ?>');"></div>
            <span class="text-center ">
                <span class=" prop-title bg-primary text-white py-2 w-100"><?= $propiedad->titulo_publicacion ?></span>
                <p class="small text-muted mb-2 mt-5"><?= $propiedad->ubicacion->nombre ?></p>
            </span>
            <div class="row p-3 text-secondary text-center">
                <!-- <div class="col-3 border-3 border-bottom border-end py-1 px-0">
                    <div> 
                        <img src="/frontend/web/images/icons/parqueo.svg" width="20px">
                        <?//= $propiedad->parqueos ?>
                    </div>
                </div> -->
                <div class="col-8 text-center m-auto">
                    <div class="row  text-center">
                        <div class="col-4 border-3 border-bottom border-end py-1 px-0">
                            <div>
                                <img src="/frontend/web/images/icons/bath.svg" width="20px">
                                <span class="text-gray"><?= $propiedad->baños ?></span>
                            </div>
                        </div>
                        <div class="col-4 border-3 border-bottom border-end py-1 px-0">
                            <div>
                                <img src="/frontend/web/images/icons/habitacion.svg" width="20px">
                                <span class="text-gray"><?= $propiedad->habitaciones ?></span>
                            </div>
                        </div>
                        <div class="col-4 border-3 border-bottom py-1 px-0">
                            <div>
                                <img src="/frontend/web/images/icons/Terreno.svg" width="20px">
                                <small class="text-gray" style="font-size: 10px;"><?= $propiedad->metros ?>M<sup>2</sup></small>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="prop-venta">
                <p class="text-primary fw-bold text-center mb-0">VENTA</p>
            </div>
            <p class="text-secondary fs-4">
                US$<?= number_format($propiedad->precio) ?>
            </p>
            <!-- <p class="  prop-precio rounded-pill mx-5 mb-4 bg-danger text-white  ">US$<?= number_format($propiedad->precio) ?></p> -->
        </div>
    </a>
</div>