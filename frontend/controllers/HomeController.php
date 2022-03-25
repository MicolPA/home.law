<?php

namespace frontend\controllers;
use frontend\models\Propiedades;

class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $propiedades = \frontend\models\Propiedades::find()->all();
        
        return $this->render('index',[
            'propiedades' => $propiedades,
        ]);
    }

}
