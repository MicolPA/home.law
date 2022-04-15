<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProfileTemplatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profile Templates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-templates-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profile Templates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'banner_background_type',
            'banner_background',
            'body_background',
            //'body_background_type',
            //'body_color',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\ProfileTemplates $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
