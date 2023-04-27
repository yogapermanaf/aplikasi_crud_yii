<?php

namespace backend\controllers;

use common\models\TbTindakan;
use common\models\TbTindakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbTindakanController implements the CRUD actions for TbTindakan model.
 */
class TbTindakanController extends Controller
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
     * Lists all TbTindakan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbTindakanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbTindakan model.
     * @param int $id_tindakan Id Tindakan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_tindakan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_tindakan),
        ]);
    }

    /**
     * Creates a new TbTindakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TbTindakan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_tindakan' => $model->id_tindakan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbTindakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_tindakan Id Tindakan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_tindakan)
    {
        $model = $this->findModel($id_tindakan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_tindakan' => $model->id_tindakan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbTindakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_tindakan Id Tindakan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_tindakan)
    {
        $this->findModel($id_tindakan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbTindakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_tindakan Id Tindakan
     * @return TbTindakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_tindakan)
    {
        if (($model = TbTindakan::findOne(['id_tindakan' => $id_tindakan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
