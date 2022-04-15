<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->params['btn']['url'] = 'ubicaciones/create';
$this->params['btn']['text'] = 'Registrar Ubicación';

$this->title = 'Ubicaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ubicaciones-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nombre',
            // 'portada',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\Ubicaciones $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
