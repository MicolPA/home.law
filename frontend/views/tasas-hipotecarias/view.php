<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TasasHipotecarias */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tasas Hipotecarias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tasas-hipotecarias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre_banco',
            'photo_url:url',
            'tasa',
            'duracion',
            'correo',
            'telefono',
            'tasa_1',
            'duracion_1',
            'tasa_2',
            'duracion_2',
            'tasa_3',
            'duracion_3',
            'date',
        ],
    ]) ?>

</div>