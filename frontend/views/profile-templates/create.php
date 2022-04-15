<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProfileTemplates */

$this->title = 'Create Profile Templates';
$this->params['breadcrumbs'][] = ['label' => 'Profile Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-templates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
