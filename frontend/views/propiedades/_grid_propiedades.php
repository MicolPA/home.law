<div class="col-md-3 text-center mb-3">
    <a class="text-decoration-none" href="/frontend/web/propiedades/ver/<?= $propiedad->id ?>">
        <div class="card rounded-1 p-3">
            <div class="rounded-1 prop-card-img" style="background-image: url('/frontend/web/<?= $propiedad->portada ?>');"></div>
            <span class="text-center prop-title">
                <span class="badge rounded-pill bg-primary text-white py-2 px-3"><?= $propiedad->titulo_publicacion ?></span>
                <p class="small text-secondary mb-0"><?= $propiedad->ubicacion->nombre ?></p>
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
                <p class="text-primary fw-bold text-center">VENTA</p>
            </div>
            <p class="rounded rounded-pill m-auto bg-danger text-white py-1 w-100 h5">US$<?= number_format($propiedad->precio) ?></p>
        </div>
    </a>
</div>