<?php

namespace frontend\controllers;
use frontend\models\Propiedades;
use frontend\models\Ubicaciones;

class HomeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $propiedades = \frontend\models\Propiedades::find()->orderby(['id' => SORT_DESC])->limit(12)->all();
        $ubicaciones = Ubicaciones::find()->limit(8)->all();
        
        return $this->render('index',[
            'ubicaciones' => $ubicaciones,
            'propiedades' => $propiedades,
        ]);
    }

}
