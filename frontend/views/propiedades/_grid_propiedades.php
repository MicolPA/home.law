<div class="col-md-3 text-center mb-3">
    <a class="text-decoration-none" href="/frontend/web/propiedades/ver/<?= $propiedad->id ?>">
        <div class="card ">
            <div class=" prop-card-img" style="background-image: url('/frontend/web/<?= $propiedad->portada ?>');"></div>
            <span class="text-center ">
                <span class=" prop-title bg-primary text-white py-2 w-100"><?= $propiedad->titulo_publicacion ?></span>
                <p class="small text-muted mb-2 mt-5"><?= $propiedad->ubicacion->nombre ?></p>
            </span>
            <div class="row p-3 text-secondary small text-center">
                <div class="col-3 border-3 border-bottom border-end p-1">
                    <div>
                        <i class="fa-solid fa-car-side mr-1"></i>
                        <?= $propiedad->parqueos ?>
                    </div>
                </div>
                <div class="col-3 border-3 border-bottom border-end p-1">
                    <div>
                        <i class="fa-solid fa-bath mr-1"></i>
                        <?= $propiedad->baños ?>
                    </div>
                </div>
                <div class="col-3 border-3 border-bottom border-end p-1">
                    <div>
                        <i class="fa-solid fa-bed mr-1"></i>
                        <?= $propiedad->habitaciones ?>
                    </div>
                </div>
                <div class="col-3 border-3 border-bottom p-1">
                    <div>
                        <i class="fa-solid fa-ruler-combined"></i>
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