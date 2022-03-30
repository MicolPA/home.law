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

    public function actionIndex()
    {
        $searchModel = new PropiedadesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionListado()
    {
        $this->layout = "main-admin";
        $searchModel = new PropiedadesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('listado', [
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
    public function actionVer($id)
    {
        $model = $this->findModel($id);
        $galeria = PropiedadesGaleria::findOne($model['galeria_id']);
        return $this->render('view', [
            'model' => $model,
            'galeria' => $galeria,
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
            // print_r($post);
            // exit;
            $model->galeria_id = $galeria->id;
            // $model->user_id = Yii::$app->user->identity->id;
            $model->fecha_publicacion = date("Y-m-d H:i:s");

            if ($model->save()) {
                $this->getCaracteristicas($extras, $post, $model);
                Yii::$app->session->setFlash('confirmacion_msg','Propiedad registrada correctamente');
                return $this->redirect(['listado']);

            }else{
                print_r($model->errors);
                exit;
            }

        }

        return $this->render('create', [
            'model' => $model,
            'extras' => $extras,
            'galeria' => $galeria,
        ]);
    }

    function getCaracteristicas($extras, $post, $propiedad){

        $extras_array = [];
        foreach ($extras as $e) {
            if (isset($post["extra_$e->id"])) {
                $extras_array[] = $e->nombre;
                $this->saveExtraList($e->id, $propiedad->id, 1);
            }else{
                $this->saveExtraList($e->id, $propiedad->id, 0);
            }
        }

        $propiedad->extra_text = implode(',', $extras_array);
        $propiedad->save();
    }

    function saveExtraList($extra_id, $propiedad_id, $type){

        $propiedad_extra = PropiedadesExtras::find()->where(['extra_id' => $extra_id ,'propiedad_id' => $propiedad_id])->one();
        if ($propiedad_extra) {
            
            if (!$type) {
                $propiedad_extra->delete();
            }
        }else{
            $propiedad_extra = new PropiedadesExtras();
            $propiedad_extra->extra_id = $extra_id;
            $propiedad_extra->propiedad_id = $propiedad_id;
            $propiedad_extra->save();
        }
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

        $field = $i == 0 ? 'portada' : "foto_$i";
        $imagen = $model[$field];
        $path = "images/propiedades/".$tipo;

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $path = "$path/$titulo/";

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (UploadedFile::getInstance($model, "$field")) {
            $model[$field] = UploadedFile::getInstance($model, "$field");
            $imagen = $path . "foto-$i-" . date('Y-m-d H-i-s') . ".". $model[$field]->extension;
            $model[$field]->saveAs($imagen);
            $model[$field] = $imagen;
        }else{
            $imagen = $model[$field];
        }
        print_r($imagen);
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
        $this->layout = "main-admin";
        $model = $this->findModel($id);
        $galeria = PropiedadesGaleria::findOne($model['galeria_id']);
        $extras = PropiedadesExtrasList::find()->all();

        if ($this->request->isPost && $model->load($this->request->post())) {
            // print_r($this->request->post());
            // print_r(UploadedFile::getInstance($model, "portada"));
            $this->savePhotos($model, $galeria);
            // exit;
            $this->getCaracteristicas($extras, $this->request->post(), $model);
            if ($model->save()) {
                Yii::$app->session->setFlash('confirmacion_msg','Propiedad modificada correctamente');
                return $this->redirect(['listado']);

            }else{
                print_r($model->errors);
                exit;
            }
        }

        return $this->render('update', [
            'model' => $model,
            'extras' => $extras,
            'galeria' => $galeria,
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

        return $this->redirect(['listado']);
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
