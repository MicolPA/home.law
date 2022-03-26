<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PropiedadesExtrasListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Propiedades Extras Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="propiedades-extras-list-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nombre',
            'icon',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\PropiedadesExtrasList $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
