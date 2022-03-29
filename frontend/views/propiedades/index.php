<div class="container pb-5">
    <div class="row w-100">
        <div class="col-md-12 text-center pt-lg-5">
            <p class="text-primary h2 mb-lg-5">
                PROPIEDADES
            </p>
        </div>

        <?php foreach ($dataProvider->query->all() as $p): ?>
            <div class="col-md-3 text-center mb-3">
                <a class="text-decoration-none" href="<?= Yii::getAlias("@web") ?>/propiedades/ver/<?= $p->id ?>">
                    <div class="card rounded-1 p-3">
                        <img class="rounded-1" src="<?= Yii::getAlias('@web') .'/'.$p->portada ?>" width="100%">
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
                </a>
            </div>
        <?php endforeach ?>
    </div>

</div>