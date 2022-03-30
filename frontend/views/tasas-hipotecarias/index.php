<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TasasHipotecariasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasas Hipotecarias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasas-hipotecarias-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tasas Hipotecarias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre_banco',
            'photo_url:url',
            'tasa',
            'duracion',
            //'correo',
            //'telefono',
            //'tasa_1',
            //'duracion_1',
            //'tasa_2',
            //'duracion_2',
            //'tasa_3',
            //'duracion_3',
            //'date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TasasHipotecarias $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
