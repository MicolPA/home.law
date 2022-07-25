<?php

namespace frontend\modules\api\controllers;

use yii;
use yii\web\Response;

class CitasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return 'HOLA';
    }


    public function actionGetAgentes(){

        Yii::$app->response->format = Response:: FORMAT_JSON; 
        
        $agentes_all = array();
        $agentes = \frontend\models\User::find()->where(['role_id' => 2])->all();

        foreach ($agentes as $agente) {
            $agentes_all[] = array(
                'id' => $agente->id
                'first_name' => $agente->first_name,
                'last_name' => $agente->last_name,
                'photo_url' => $agente->photo_url,

            );
        }

        return $agentes_all;

    }

}
