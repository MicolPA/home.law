<?php 

$get = Yii::$app->request->get();
$keyword = isset($get['keyword']) ? $get['keyword'] : '';
$keyplace = isset($get['keyplace']) ? $get['keyplace'] : '';

 ?>

<div class="container pb-5">
    <div class="row w-100 pt-5 m-auto">
        <div class="col-md-12 text-center pt-lg-5 mb-5 mt-5">
            <p class="text-center text-primary p-2 m-0 fw-bold h4">PROPIEDADES</p>
            <?php if ($keyword or $keyplace): ?>
                <p class="mb-5 h6 fw-normal">Resultado de la búsqueda <span class="badge bg-primary"><?= $keyword ?></span> <span class="badge bg-primary"><?= $keyplace ?></span></p>
            <?php endif ?>
        </div>

        <?php foreach ($dataProvider->query->all() as $propiedad): ?>
            <?= $this->render('_grid_propiedades', ['propiedad' => $propiedad, 'count' => 1]) ?>
        <?php endforeach ?>
    </div>

</div>