<?php
/* @var $this yii\web\View */

$propiedades = \frontend\models\LogVisitas::find()
->where(['agente_id' => Yii::$app->user->identity->id])
->andWhere(['perfil_agente' => null])->count();

$perfil = \frontend\models\LogVisitas::find()
->where(['agente_id' => Yii::$app->user->identity->id])
->andWhere(['propiedad_id' => null])->count();
// echo hex2bin($ex);

$this->title = "Administrador";
?>
<h4><i class="fas fa-chart-pie mr-2 text-danger"></i> Mis Analiticas</h4>

<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-info card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-hotel"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Visitas a Propiedades</p>
                            <h4 class="card-title"><?= number_format($propiedades) ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card card-stats card-danger card-round">
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="icon-big text-center">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col-7 col-stats">
                        <div class="numbers">
                            <p class="card-category">Visitas a mi perfil</p>
                            <h4 class="card-title"><?= number_format($perfil) ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>