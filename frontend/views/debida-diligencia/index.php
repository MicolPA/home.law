<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DebidaDiligenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Debida Diligencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="debida-diligencia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Debida Diligencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'propiedad_id',
            'debida_diligencia_list_id',
            'user_id',
            'date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DebidaDiligencia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
