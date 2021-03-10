<?php

namespace app\controllers;

use Yii;
use app\models\Leave;
use app\models\LeaveSearch;
use app\models\Personnel;
use app\models\PersonnelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use rudissaar\fpdf\FPDF;



/**
 * LeaveController implements the CRUD actions for Leave model.
 */
class LeaveController extends Controller
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
     * Lists all Leave models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LeaveSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProviderRequested = Leave::requested();
        $dataProviderApproved = Leave::approved();
        $dataProviderRejected = Leave::rejected();


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProviderRequested' => $dataProviderRequested,
            'dataProviderApproved' => $dataProviderApproved,
            'dataProviderRejected' => $dataProviderRejected,
        ]);
    }

    /**
     * Displays a single Leave model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Leave model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Leave();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->lve_master_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Leave model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->lve_master_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Leave model.
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
     * Finds the Leave model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Leave the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Leave::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionList()
    {
        // $searchModel = new LeaveSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $searchModel = new PersonnelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('_list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionViewpersonnel($id)
    {
        return $this->render('_viewpersonnel', [
            'model' => $this->findModelPersonnel($id),
        ]);
    }

    protected function findModelPersonnel($id)
    {
        if (($model = Personnel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionPrint($id)
    {
        $model = $this->findModel($id);

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->Image(Yii::getAlias('@projectLogoPath').'ppkk-official-logo.jpg', 10, 10, -300);
        $pdf->SetFont('Arial');
        $pdf->Cell(50);
        $pdf->Cell(40, 10, 'KEMENTERIAN SEKRETARIAT NEGARA RI');
        $pdf->Ln();
        $pdf->Cell(50);
        $pdf->Cell(40, 10, 'PUSAT PENGELOLAAN KOMPLEK KEMAYORAN');
        $pdf->Ln();
        $pdf->Cell(50);
        $pdf->Cell(40, 10, 'Jl. Merpati B-14 No. 2, Kota Baru Bandar Kemayoran Jakarta Pusat 10720');
        $pdf->Ln();
        $pdf->Cell(50);
        $pdf->Cell(40, 10, 'Telp. 021-4207688 (Hunting) Faks. 021-6543123');
        $pdf->Line(10, 60, 200, 60);
        $pdf->Ln();
        $pdf->Cell(80);
        $pdf->Ln();
        $pdf->Cell(80, 10, '');
        $pdf->Ln();
        $pdf->Cell(80);
        $pdf->Cell(40, 10, 'Surat Cuti');
        $pdf->Ln();
        $pdf->Cell(65);
        $pdf->Cell(40, 10, 'nomor : ..../cuti/KU/2021');
        $pdf->Ln();
        $pdf->Cell(80, 10, '');
        $pdf->Ln();
        $pdf->Cell(80, 10, '');
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Yang bertanda tangan di bawah ini:');
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Nama');
        $pdf->Cell(25);
        $pdf->Cell(40, 10, ': ' . $model->prs_master_id);
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'NPP');
        $pdf->Cell(25);
        $pdf->Cell(40, 10, ': ' . $model->prs_master_id);
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Golongan');
        $pdf->Cell(25);
        $pdf->Cell(40, 10, ': ' . $model->prs_master_id);
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Jabatan');
        $pdf->Cell(25);
        $pdf->Cell(40, 10, ': ' . $model->prs_master_id);
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Cuti');
        $pdf->Cell(25);
        $pdf->Cell(40, 10, ': ' . Yii::$app->formatter->format($model->start_date, 'date') . ' - ' . Yii::$app->formatter->format($model->end_date, 'date'));
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Keterangan');
        $pdf->Cell(25);
        $pdf->Cell(40, 10, ': ' . $model->leave_reason);
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Pegawai Pengganti');
        $pdf->Cell(25);
        $pdf->Cell(40, 10, ': ' . $model->substitute_employee);
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(15, 10, '');
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Demikian atas perhatian Bapak Ibu kami ucapkan terimakasih.');
        $pdf->Ln();
        $pdf->Cell(15, 15, '');
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Mengetahui,');
        $pdf->Ln();
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Direktur Keuangan dan Umum');
        $pdf->Cell(100);
        $pdf->Cell(40, 10, 'Pemohon');
        $pdf->Ln();
        $pdf->Cell(15, 15, '');
        $pdf->Ln();
        $pdf->Cell(15, 15, '');
        $pdf->Cell(15);
        $pdf->Ln();
        $pdf->Cell(15, 15, '');
        $pdf->Cell(15);
        $pdf->Cell(40, 10, 'Moh. Subekhi');
        $pdf->Cell(90);
        $pdf->Cell(40, 10, $model->prs_master_id);
        $pdf->Output('D', 'hello.pdf');
    }

}
