<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


$this->title = 'Listado de propiedades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedades-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'codigo',
            'titulo_publicacion',
            [
                'label' => 'Tipo',
                'attribute' => 'tipoPropiedad.nombre',
            ],
            [
                'label' => 'Ubicación',
                'attribute' => 'ubicacion.nombre',
            ],
            //'habitaciones',
            //'baños',
            //'detalles:ntext',
            //'created_by_user_id',
            //'user_id',
            //'galeria_id',
            //'fecha_publicacion',
            //'portada',
            //'extra_text:ntext',
            //'tags:ntext',
            //'precio',
            //'metros',
            //'pies',
            //'date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\Propiedades $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
