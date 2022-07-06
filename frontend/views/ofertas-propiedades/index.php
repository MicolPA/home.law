<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OfertasPropiedadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ofertas Propiedades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ofertas-propiedades-index">

    <!-- <h1><?//= Html::encode($this->title) ?></h1> -->

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'pdf_url:url',
            'monto',
            'date',
            // 'agent_id',
            [
                'label' => 'Status',
                'attribute' => 'status.name',
            ],
            //'status_updated_date',
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, \frontend\models\OfertasPropiedades $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],

            [
                'label' => '',
                'format' => 'raw',
                'options' => ['class' => 'col-md-2 col-xs-4 col-sm-4'],
                'value' => function ($data) {
                    $view = "<a target='_blank' href='$data->pdf_url'><i class='fas fa-eye font-14 mr-0'></i></a>";
                    // $view =  Html::a('<i class="fas fa-eye font-14 mr-0"></i>', ['/'.$data->pdf_url], ['target' => '_blank']);
                    $update =  Html::a('<i class="fas fa-pencil-alt font-14 mr-0 small"></i>', ['update', 'id' => $data->id], []);
                    $delete = Html::a('<i class="fas fa-trash font-14 small"></i>', ['delete', 'id' => $data->id], [
                        'data' => [
                            'confirm' => '¿Está seguro/a que desea eliminar este registro?',
                            'method' => 'post',
                        ],
                    ]);

                    return "$view $update $delete";
                },
            ],
        ],
    ]); ?>


</div>
