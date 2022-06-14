<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ExpenseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Expenses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expense-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Expense'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_expense',
            'id_category',
            'id_customer',
            'expense_name',
            'image',
            //'amount',
            //'deleted',
            //'created_by',
            //'date_created',
            //'updated_by',
            //'date_updated',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Expense $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_expense' => $model->id_expense]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
