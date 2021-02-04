<?php

namespace app\controllers;

use Yii;
use app\models\Personnel;
use app\models\Career;
use app\models\Status;
use app\models\Family;
use app\models\Education;
use app\models\Experience;
use app\models\PersonnelSearch;
use app\models\CareerSearch;
use app\models\StatusSearch;
use app\models\FamilySearch;
use app\models\EducationSearch;
use app\models\ExperienceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PersonnelController implements the CRUD actions for Personnel model.
 */
class PersonnelController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Personnel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PersonnelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Personnel model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $dataProviderCareer = Career::search2($id);
        $dataProviderStatus = Status::search2($id);
        $dataProviderFamily = Family::search2($id);
        $dataProviderEducation = Education::search2($id);
        $dataProviderExperience = Experience::search2($id);

        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProviderCareer' => $dataProviderCareer,
            'dataProviderStatus' => $dataProviderStatus,
            'dataProviderFamily' => $dataProviderFamily,
            'dataProviderEducation' => $dataProviderEducation,
            'dataProviderExperience' => $dataProviderExperience,
        ]);
    }

    /**
     * Creates a new Personnel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Personnel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prs_master_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Personnel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prs_master_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Personnel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Personnel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Personnel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Personnel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionCareer()
    {
        $model = new Career();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prs_master_id]);
        }

        return $this->render('//career/create', [
            'model' => $model,
        ]);
    }

    public function actionStatus()
    {
        $model = new Status();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prs_master_id]);
        }

        return $this->render('//status/create', [
            'model' => $model,
        ]);
    }

    public function actionFamily()
    {
        $model = new Family();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prs_master_id]);
        }

        return $this->render('//family/create', [
            'model' => $model,
        ]);
    }

    public function actionEducation()
    {
        $model = new Education();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prs_master_id]);
        }

        return $this->render('//education/create', [
            'model' => $model,
        ]);
    }

    public function actionExperience()
    {
        $model = new Experience();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->prs_master_id]);
        }

        return $this->render('//experience/create', [
            'model' => $model,
        ]);
    }
    
}
