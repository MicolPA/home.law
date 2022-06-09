<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


$this->title = 'Debida Diligencia Listados';
$this->params['breadcrumbs'][] = $this->title;

$this->params['btn']['url'] = 'debida-diligencia-listado/create';
$this->params['btn']['text'] = 'Registrar Nueva';
?>
<div class="debida-diligencia-listado-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            // 'color_1',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\DebidaDiligenciaListado $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
