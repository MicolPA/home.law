<div class="container pb-5">
    <div class="row w-100">
        <div class="col-md-12 text-center pt-lg-5">
            <p class="text-primary h2 mb-lg-5">
                PROPIEDADES
            </p>
        </div>

        <?php foreach ($dataProvider->query->all() as $propiedad): ?>
            <?= $this->render('_grid_propiedades', ['propiedad' => $propiedad]) ?>
        <?php endforeach ?>
    </div>

</div>