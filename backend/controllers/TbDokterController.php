<?php

namespace backend\controllers;

use common\models\TbDokter;
use common\models\TbDokterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbDokterController implements the CRUD actions for TbDokter model.
 */
class TbDokterController extends Controller
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
     * Lists all TbDokter models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbDokterSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbDokter model.
     * @param int $id_dokter Id Dokter
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_dokter)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_dokter),
        ]);
    }

    /**
     * Creates a new TbDokter model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbDokter();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_dokter' => $model->id_dokter]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbDokter model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_dokter Id Dokter
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_dokter)
    {
        $model = $this->findModel($id_dokter);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_dokter' => $model->id_dokter]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbDokter model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_dokter Id Dokter
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_dokter)
    {
        $this->findModel($id_dokter)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbDokter model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_dokter Id Dokter
     * @return TbDokter the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_dokter)
    {
        if (($model = TbDokter::findOne(['id_dokter' => $id_dokter])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
