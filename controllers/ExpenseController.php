<?php

namespace app\controllers;

use app\models\Expense;
use app\models\ExpenseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ExpenseController implements the CRUD actions for Expense model.
 */
class ExpenseController extends Controller
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
     * Lists all Expense models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ExpenseSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Expense model.
     * @param int $id_expense Id Expense
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_expense)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_expense),
        ]);
    }

    /**
     * Creates a new Expense model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Expense();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_expense' => $model->id_expense]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Expense model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_expense Id Expense
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_expense)
    {
        $model = $this->findModel($id_expense);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_expense' => $model->id_expense]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Expense model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_expense Id Expense
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_expense)
    {
        $this->findModel($id_expense)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Expense model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_expense Id Expense
     * @return Expense the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_expense)
    {
        if (($model = Expense::findOne(['id_expense' => $id_expense])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
