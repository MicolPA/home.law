<?php

namespace frontend\controllers;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "main-admin";
        return $this->render('index');
    }

}
