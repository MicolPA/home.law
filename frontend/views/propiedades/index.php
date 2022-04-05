<div class="container pb-5">
    <div class="row w-100 pt-5 m-auto">
        <div class="col-md-12 text-center pt-lg-5 mb-4 mt-4">
            <p class="text-center text-primary p-2 m-0 fw-bold h4 mb-5">PROPIEDADES</p>
        </div>

        <?php foreach ($dataProvider->query->all() as $propiedad): ?>
            <?= $this->render('_grid_propiedades', ['propiedad' => $propiedad, 'count' => 1]) ?>
        <?php endforeach ?>
    </div>

</div>