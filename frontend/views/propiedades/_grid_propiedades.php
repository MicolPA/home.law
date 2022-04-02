
<div class="col-lg-3 text-center mb-3 col-md-12 <?= in_array($count, array(1,5,9)) ? '' : 'mobile-hidden'  ?>">
    <a class="text-decoration-none" href="/frontend/web/propiedades/ver/<?= $propiedad->id ?>">
        <div class="card ">
            <div class=" prop-card-img" style="background-image: url('/frontend/web/<?= $propiedad->portada ?>');"></div>
            <span class="text-center ">
                <span class=" prop-title bg-primary text-white py-2 w-100"><?= $propiedad->titulo_publicacion ?></span>
                <p class="small text-muted mb-2 mt-5"><?= $propiedad->ubicacion->nombre ?></p>
            </span>
            <div class="row p-3 text-secondary  text-center">
                <div class="col-3 border-3 border-bottom border-end py-1 px-0">
                    <div>
                        <img src="/frontend/web/images/icons/parqueo.svg" width="20px">
                        <?= $propiedad->parqueos ?>
                    </div>
                </div>
                <div class="col-3 border-3 border-bottom border-end py-1 px-0">
                    <div>
                        <img src="/frontend/web/images/icons/bath.svg" width="20px">
                        <?= $propiedad->baños ?>
                    </div>
                </div>
                <div class="col-3 border-3 border-bottom border-end py-1 px-0">
                    <div>
                        <img src="/frontend/web/images/icons/habitacion.svg" width="20px">
                        <?= $propiedad->habitaciones ?>
                    </div>
                </div>
                <div class="col-3 border-3 border-bottom py-1 px-0">
                    <div>
                        <img src="/frontend/web/images/icons/Terreno.svg" width="20px">
                        <small style="font-size: 9px;"><?= $propiedad->metros ?>M<sup>2</sup></small>
                    </div>
                </div>
                
            </div>
            <div class="prop-venta">
                <p class="text-primary fw-bold text-center mb-0">VENTA</p>
            </div>
            <p class="  prop-precio rounded-pill mx-5 mb-4 bg-danger text-white  ">US$<?= number_format($propiedad->precio) ?></p>
        </div>
    </a>
</div>