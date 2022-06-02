<?php

namespace frontend\controllers;

use Yii;
use frontend\models\User;
use frontend\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new User();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'view' => '_form',
        ]);
    }

    public function actionRegistrar(){
        $model = new \frontend\models\SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'view' => '_form_admin',
        ]);
    }

    public function actionConfigurar($id)
    {
        // $this->layout = "main-no-menu";
        $model = $this->findModel($id);
        $post = $this->request->post();
        if ($this->request->isPost && $model->load($post)) {

            $servicios = new \common\models\Servicios();
            $model->photo_url = $servicios->savePhoto($model, $model->first_name, 'photo_url', 'perfil');

            $user = \common\models\User::findOne($id);
            $user->setPassword($post['password']);
            $user->generateAuthKey();
            $user->save();

            $model->save();

            Yii::$app->user->login($user);
            return $this->redirect(['perfil', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'view' => '_form_first_time',
        ]);
    }

    function actionSeleccionarPlantilla(){

        $plantillas = \frontend\models\ProfileTemplates::find()->all();
        $propiedades = \frontend\models\Propiedades::find()->all();

        return $this->render('plantillas', [
            'plantillas' => $plantillas,
            'propiedades' => $propiedades,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionCambio($id)
    {
        $this->layout = false;
        $model = $this->findModel($id);
        $plantillas = \frontend\models\ProfileTemplates::find()->all();
        $propiedades = \frontend\models\Propiedades::find()->where(['assigned_to_user_id' => $id, 'status' => 1])->all();
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('perfil', [
            'model' => $model,
            'propiedades' => $propiedades,
            'plantillas' => $plantillas,
            'view' => 'center-view',
        ]);
    }

    public function actionPerfil($id, $view='perfil')
    {
        $this->layout = "main";
        $model = $this->findModel($id);
        $post = Yii::$app->request->post();
        $plantillas_list = \frontend\models\UserTemplateColor::find()->all();


        $searchModel = new \frontend\models\PropiedadesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams, false);


        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        if ($post) {$this->saveTemplate($post, $model); }

        return $this->render('perfil', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'plantillas_list' => $plantillas_list,
            'view' => $view,
        ]);
    }

    function saveTemplate($post, $model){

        $model->template_id = (int)$post['template'];
        $model->layout = $post['layout'];
        $model->save();
        return $this->redirect(['perfil', 'id' => $model->id]);


    }

    public function actionEditar($id)
    {
        // $this->layout = "main-no-menu";
        $model = $this->findModel($id);
        $post = Yii::$app->request->post();
        if ($model->load($post)) {

            $servicios = new \common\models\Servicios();
            $model->photo_url = $servicios->savePhoto($model, $model->username, 'photo_url', 'perfil');

            $password = $post['password'];
            if ($post['password'] != '000000000') {
                $user = \common\models\User::findOne($id);
                $user->setPassword($post['password']);
                $user->generateAuthKey();
                $user->save();
                Yii::$app->user->login($user);
            }
            if ($model->save()) {
                Yii::$app->session->setFlash('success', "Cambios realizados correctamente");
            }else{
                Yii::$app->session->setFlash('fail', "Ha ocurrido un error, intente más tarde nuevamente.");
            }
            
            return $this->redirect(['editar', 'id' => $id]);
        }

        return $this->render('update', [
            'model' => $model,
            'view' => '_form',
        ]);
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
