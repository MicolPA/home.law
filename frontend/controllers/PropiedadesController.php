<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Propiedades;
use frontend\models\Ubicaciones;
use frontend\models\PropiedadesTipo;
use frontend\models\PropiedadesGaleria;
use frontend\models\PropiedadesExtras;
use frontend\models\PropiedadesExtrasList;
use frontend\models\PropiedadesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PropiedadesController implements the CRUD actions for Propiedades model.
 */
class PropiedadesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
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
     * Lists all Propiedades models.
     *
     * @return string
     */
    public function actionListado()
    {
        $this->layout = "main-admin";
        $searchModel = new PropiedadesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Propiedades model.
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
     * Creates a new Propiedades model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */

    public function actionRegistrar()
    {
        // $this->layout = '@app/views/layouts/main-admin';
        $this->layout = "main-admin";
        $model = new Propiedades();
        $extras = PropiedadesExtrasList::find()->all();
        $galeria = new PropiedadesGaleria();
        $post = Yii::$app->request->post();

        $model->created_by_user_id = Yii::$app->user->identity->id;
        $model->date = date("Y-m-d H:i:s");

        if ($model->load($post)) {
        // if ($model->load($post) and $extras->load(Yii::$app->request->post())) {

            $this->savePhotos($model, $galeria);

            $galeria->save();
            $model->galeria_id = $galeria->id;
            // $model->user_id = Yii::$app->user->identity->id;
            $model->fecha_publicacion = date("Y-m-d H:i:s");
            $model->save();
            print_r($model->errors);

            $extras->propiedad_id = $model->id;
            // $extras->date = date("Y-m-d H:i:s");
            $extras->save();

            Yii::$app->session->setFlash('confirmacion_msg','Propiedad registrada correctamente');
            return $this->redirect(['listado']);
            // return $this->redirect(['ver', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'extras' => $extras,
            'galeria' => $galeria,
        ]);
    }

    function savePhotos($model, $galeria){

        $model->portada = $this->get_photo_url($model, $model->tipoPropiedad->nombre, $model->titulo_publicacion, 0);

        for ($i=2;$i<10;$i++) {

            $galeria["foto_$i"] = $this->get_photo_url($galeria, $model->tipoPropiedad->nombre, $model->titulo_publicacion, $i);

            // if (isset($galeria["foto_$i"]) and $_FILES["foto_$i"]) {
            //     $filename = $_FILES["foto_$i"]["name"];
            //     $tempname = $_FILES["foto_$i"]["tmp_name"];
            //     $folder   = $filename;

            //     if ( move_uploaded_file( $tempname, $folder ) ) {
            //         echo "Image uploaded successfully";
            //     } else{
            //         echo "Failed to upload image";
            //     }
            // }
            
        }
        
    }

    function get_photo_url($model, $tipo, $titulo, $i){

        $imagen = null;
        $path = "images/".$tipo."/";

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $path = "$path/$titulo/";

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $field = $i == 0 ? 'portada' : "foto_$i";
        if (UploadedFile::getInstance($model, "$field")) {
            $model[$field] = UploadedFile::getInstance($model, "$field");
            $imagen = $path . "foto-$i-" . date('Y-m-d H-i-s') . ".". $model[$field]->extension;
            $model[$field]->saveAs($imagen);
            $model[$field] = $imagen;
        }else{
            $imagen = $model[$field];
        }

        return $imagen;

    }
    /**
     * Updates an existing Propiedades model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Propiedades model.
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
     * Finds the Propiedades model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Propiedades the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Propiedades::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
