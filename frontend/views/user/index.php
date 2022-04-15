<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->params['btn']['url'] = 'user/registrar';
$this->params['btn']['text'] = 'Registrar Usuario';

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'username',
            // 'photo_url:url',
            //'auth_key',
            //'role_id',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            [
                'label' => 'Rol',
                'attribute' => 'role.name',
            ],
            //'status',
            //'created_at',
            //'updated_at',
            //'verification_token',
            //'template_id',
            //'video_url:url',
            //'video_platform',
            //'instagram',
            //'facebook',
            //'twitter',
            //'whatsapp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \frontend\models\User $model, $key, $index, $column) {
                    $action = str_replace('update', 'editar', $action);
                    $action = str_replace('view', 'perfil', $action);
                    $action = str_replace('update', 'editar', $action);
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
