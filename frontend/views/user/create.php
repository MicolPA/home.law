<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = 'Registrar Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <?= $this->render($view, [
        'model' => $model,
    ]) ?>

</div>
