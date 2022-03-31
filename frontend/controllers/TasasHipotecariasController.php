<?php

namespace frontend\controllers;

use frontend\models\TasasHipotecarias;
use frontend\models\TasasHipotecariasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TasasHipotecariasController implements the CRUD actions for TasasHipotecarias model.
 */
class TasasHipotecariasController extends Controller
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
     * Lists all TasasHipotecarias models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = "main";
        $searchModel = new TasasHipotecariasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionListado()
    {
        $searchModel = new TasasHipotecariasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('listado', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TasasHipotecarias model.
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

    /**
     * Creates a new TasasHipotecarias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TasasHipotecarias();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $servicios = new \common\models\Servicios();
                $model->photo_url = $servicios->savePhoto($model, $model->nombre_banco, 'photo_url', 'tasas-hipotecarias');
                $model->save();

                return $this->redirect(['listado']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TasasHipotecarias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load($this->request->post())) {
            $servicios = new \common\models\Servicios();
            $model->photo_url = $servicios->savePhoto($model, $model->nombre_banco, 'photo_url', 'tasas-hipotecarias');
            $model->save();

            return $this->redirect(['listado']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TasasHipotecarias model.
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
     * Finds the TasasHipotecarias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return TasasHipotecarias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TasasHipotecarias::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
