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

            [
                'format'=>'html',
                'attribute' => 'status',
                'label' => 'Status',
                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                'value' => function ($data) {

                    $status = $data->status == 1 ? "<span class='fw-bold text-success'>Publicada</span>" : "<span class='fw-bold text-warning'>Pendiente Aprobación</span>";

                    $btn = Html::a($status, ['cambiar-status', 'id' => $data->id], [
                        'data' => [
                            'confirm' => "¿Está seguro/a que desea cambiarle el status a esta propiedad?",
                            'method' => 'post',
                        ],
                    ]);

                    return $btn;
                },
            ],
            [
                'format'=>'html',
                'label' => '',
                'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
                'value' => function ($data) {

                    $btn = Html::a('Debida Diligencia', ['debida-diligencia/create', 'propiedad_id' => $data->id], ['class' => 'btn btn-info btn-xs text-white']);

                    return $btn;
                },
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
                    return Url::toRoute([str_replace('view', 'ver', $action), 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
