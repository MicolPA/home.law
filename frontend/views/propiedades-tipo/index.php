<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


$this->params['btn']['url'] = 'propiedades-tipo/create';
$this->params['btn']['text'] = 'Registrar Tipo de Propiedad';

$this->title = 'Propiedades Tipos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedades-tipo-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\PropiedadesTipo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
