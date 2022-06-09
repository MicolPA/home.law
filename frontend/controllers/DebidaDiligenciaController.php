<?php

namespace frontend\controllers;

use Yii;
use frontend\models\DebidaDiligencia;
use frontend\models\Propiedades;
use frontend\models\DebidaDiligenciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * DebidaDiligenciaController implements the CRUD actions for DebidaDiligencia model.
 */
class DebidaDiligenciaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        $this->layout = "main-admin";
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all DebidaDiligencia models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DebidaDiligenciaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DebidaDiligencia model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    function saveList($list, $propiedad_id, $save){

        $model = DebidaDiligencia::find()->where(['propiedad_id' => $propiedad_id, 'debida_diligencia_list_id' => $list])->one();

        if ($model and !$save) {
            $model->delete();
        }elseif(!$model and $save){

            $model = new DebidaDiligencia();
            $model->propiedad_id = $propiedad_id;
            $model->debida_diligencia_list_id = $list;
            $model->user_id = Yii::$app->user->identity->id;
            $model->date = date("Y-m-d H:i:s");
            $model->save();
        }

    }

    function DebidaDiligenciaRegister($post, $propiedad_id){
        $options = \frontend\models\DebidaDiligenciaListado::find()->all();

        foreach($options as $op){
            $this->saveList($op->id, $propiedad_id, isset($post["opcion_$op->id"]) ? true : false);
        }

    }


    public function actionCreate($propiedad_id)
    {

        $this->checkDebidaDiligencia($propiedad_id);
        $propiedad = Propiedades::findOne($propiedad_id);
        $model = new DebidaDiligencia();

        if ($this->request->isPost) {
            $this->DebidaDiligenciaRegister($this->request->post(), $propiedad_id);
            Yii::$app->session->setFlash('success1', 'Datos guardados correctamente');
            return $this->redirect(['/propiedades/listado']); 
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'propiedad' => $propiedad,
            'model' => $model,
        ]);
    }

    function checkDebidaDiligencia($propiedad_id){

        $check = DebidaDiligencia::find()->where(['propiedad_id' => $propiedad_id])->one();

        if ($check) {
            return $this->redirect(['update', 'propiedad_id' => $propiedad_id]);
        }

    }

    /**
     * Updates an existing DebidaDiligencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($propiedad_id)
    {
        // $model = $this->findModel($id);
        $propiedad = Propiedades::findOne($propiedad_id);
        $model = new DebidaDiligencia();

        if ($this->request->isPost) {
            $this->DebidaDiligenciaRegister($this->request->post(), $propiedad_id);
            Yii::$app->session->setFlash('success1', 'Datos guardados correctamente');
            return $this->redirect(['/propiedades/listado']); 
        }

        return $this->render('update', [
            'propiedad' => $propiedad,
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DebidaDiligencia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DebidaDiligencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return DebidaDiligencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DebidaDiligencia::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
