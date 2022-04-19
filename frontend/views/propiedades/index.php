<?php 



$get = Yii::$app->request->get();
$keyword = isset($get['keyword']) ? $get['keyword'] : '';
$keyplace = isset($get['keyplace']) ? $get['keyplace'] : '';

$this->title = "Propiedades";

 ?>
<style>
    .form-control{
        padding: 0.6rem 1rem !important;
    }
</style>
<div class="container pb-5">
    <div class="row w-100 pt-5 m-auto">
        <div class="col-md-4 pt-lg-5 mb-5 mt-5">
            <p class="text-muted h5 pt-2">
                <?= $dataProvider->query->count() ?> Inmuebles encontrados
            </p>
        </div>
        <div class="col-md-4 text-center pt-lg-5 mb-5 mt-5">
            <p class="text-center text-primary p-2 m-0 fw-bold h4">PROPIEDADES</p>
            <?php if ($keyword or $keyplace): ?>
                <p class="mb-5 h6 fw-normal">Resultado de la búsqueda <span class="badge bg-primary"><?= $keyword ?></span> <span class="badge bg-primary"><?= $keyplace ?></span></p>
            <?php endif ?>
        </div>

        <div class="col-md-4 pt-lg-5 mb-5 mt-5">
            <div>
                  <button class="btn btn-transparent px-4 border border-2 border-primary btn-round dropdown-toggle input-r" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    ORDENAR
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Más reciente</a></li>
                    <li><a class="dropdown-item" href="#">Precio Más Bajo</a></li>
                    <li><a class="dropdown-item" href="#">Precio Más Alto</a></li>
                  </ul>
                <a data-bs-toggle="modal" data-bs-target="#filtroModal" class="btn btn-transparent px-4 border border-2 border-primary btn-round">FILTROS AVANZADOS <i class="fa-solid fa-gears font-16 ml-2"></i></a>
            </div>
        </div>

        <?php foreach ($dataProvider->query->all() as $propiedad): ?>
            <?= $this->render('_grid_propiedades', ['propiedad' => $propiedad, 'count' => 1]) ?>
        <?php endforeach ?>
    </div>

</div>
<?= $this->render('_search_modal', ['model' => $model, 'extras' => $extras, 'tipos' => $tipos]) ?>
