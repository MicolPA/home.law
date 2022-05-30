<?php 

$this->title = "$model->first_name $model->last_name";

$plantilla = \frontend\models\UserTemplateColor::findOne($model['template_id']);
$view = 'profile-template/corporate-view';

$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = strpos($url, '?') ? "$url&" : "$url?";

$extras = \frontend\models\PropiedadesExtrasList::find()->where(['is_filtro' => 1])->all();
$tipos = \frontend\models\PropiedadesTipo::find()->all();
$propiedad = new \frontend\models\PropiedadesSearch();
 ?>
 <style>
 	@media (min-width: 576px){
 		.modal-dialog {
		    max-width: 600px;
		    margin: 1.75rem auto;
		}
 	}
 </style>
<div class="custom-template">
    <?php if (Yii::$app->user->identity->id == $model->id): ?>
    <div class="custom-toggle bg-primary">
    	<a class="btn btn-primary" data-bs-toggle="modal" href="#templateModal" role="button"><i class="fa-solid fa-gear"></i></a>
    </div>
    <?php endif ?>
</div>
<input type="hidden" value="<?= $model->id ?>">

<?= $this->render("profile-template/$model->layout", ['user' => $model, 'plantilla' => $plantilla]) ?>


<div class="py-5 properties-banner-profile" style="background: <?= $plantilla['color_4'] ?>">
    <div class="container p-5">

        <div class="row">
            <div class="col-md-4 pt-lg-5 mb-5 mt-md-5">
            	<p class="text-primary m-0 fw-bold h4">PROPIEDADES</p>
	            <p class="text-muted h5 pt-2 fw-normal">
	                <?= $dataProvider->query->count() ?> Inmuebles encontrados
	            </p>
	        </div>
	        <div class="col-md-4 text-center pt-lg-5 mb-md-5 mt-md-5">
	        </div>

	        <div class="col-md-4 pt-lg-5 mb-5 mt-5">
	            <div>
	                  <button class="text-primary btn btn-transparent px-4 border border-1 border-primary btn-round dropdown-toggle input-r" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	                    ORDENAR
	                  </button>
	                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	                    <li><a class="dropdown-item" href="<?= $url ?>sort=recientes">Más reciente</a></li>
	                    <li><a class="dropdown-item" href="<?= $url ?>sort=precio_bajo">Precio Más Bajo</a></li>
	                    <li><a class="dropdown-item" href="<?= $url ?>sort=precio_alto">Precio Más Alto</a></li>
	                  </ul>
	                <a data-bs-toggle="modal" data-bs-target="#filtroModal" class="align-items-center btn btn-transparent px-4 border border-1 text-primary border-primary btn-round">FILTROS AVANZADOS <img src="/frontend/web/images/icons/filtro.svg" class="text-primary" width="20px" style="margin-top:-3px"></a>
	            </div>
	        </div>

	        <?php foreach ($dataProvider->query->all() as $propiedad): ?>
	            <?= $this->render('/propiedades/_grid_propiedades', ['propiedad' => $propiedad, 'count' => 1]) ?>
	        <?php endforeach ?>
        </div>
    </div>
</div>
<?= $this->render('_modal_layout', ['plantilla_selected' => $plantilla, 'plantillas_list' => $plantillas_list]) ?>
<?= $this->render('/propiedades/_search_modal', ['model' => $propiedad, 'extras' => $extras, 'tipos' => $tipos]) ?>
