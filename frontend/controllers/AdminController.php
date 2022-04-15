<?php

namespace frontend\controllers;

use Yii;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "main-admin";
        return $this->render('index');
    }


    public function actionGetTemplateColors(){
        $plantilla="";
        if (Yii::$app->request->isAjax) {
            $post = Yii::$app->request->post();

            $plantilla = \frontend\models\ProfileTemplates::findOne($post['plantilla_id']);


            $user = \frontend\models\User::findOne(Yii::$app->user->identity->id);
            if ($user) {
                $user->template_id = $post['plantilla_id'];
                $user->save();
            }
        }
        return \yii\helpers\Json::encode($plantilla);
    }

}
