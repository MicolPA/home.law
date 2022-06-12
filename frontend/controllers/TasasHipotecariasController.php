<?php

namespace frontend\controllers;

use Yii;
use frontend\models\TasasHipotecarias;
use frontend\models\TasasHipotecariasSearch;
use common\models\Servicios;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use kartik\mpdf\Pdf;

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

    



    function actionTablaAmortizacion($monto, $meses, $tasa){

        $servicios = new Servicios();

        $monto =  str_replace(',', '', $monto);
        $tasa =  str_replace(',', '', $tasa);
        $servicios->getTablaAmortizacion($monto, $meses, $tasa);
        $initialData['monto'] = $monto;
        $initialData['tasa'] = $tasa;
        $datos = $servicios->calcularCuota($monto, $meses, $tasa);

        $cuota = number_format($datos['cuota'], 2);
        $totalInterest = number_format($datos['totalInterest'], 2);
        $totalPay = number_format($datos['totalPay'], 2);
        
        // $(".resultados").show();

        //echo "$".$cuota . '<br>';
       // echo "$".$totalInterest . '<br>';
        //echo "$".$totalPay . '<br>';
        
        // $('#monthlypay').html("$"+$cuota);
        // $('#totalinterest').html("$"+$totalInterest); 
        // $('#totalpay').html("$"+$totalPay);

        $content = $this->renderPartial('tabla-amortizacion-pdf',['datos' => $datos, 'get' => Yii::$app->request->get(), 'servicios' => $servicios, 'initialData' => $initialData]);

        // setup kartik\mpdf\Pdf component
        $pdf = new \kartik\mpdf\Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE,
            // A4 paper format
            // 'format' => [200.8, 280.8],
            'marginTop' => 5,
            'marginBottom' => 5,
            'marginLeft' => 5,
            'marginRight' => 5,
            // 'BackgroundColor' => 'red',
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}',
            // set mPDF properties on the fly
            'options' => ['title' => ''],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>false,
                'SetFooter'=>false,
                // 'SetFooter'=>['{PAGENO}'],
            ]
        ]);

        return $pdf->render();
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
