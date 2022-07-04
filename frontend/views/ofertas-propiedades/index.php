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
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'pdf_url:url',
            'date',
            // 'agent_id',
            'statusOferta.name',
            //'status_updated_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\OfertasPropiedades $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
