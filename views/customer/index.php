<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Customers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Customer'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_customer',
            'username',
            'email:email',
            'password',
            'otp',
            //'phone',
            //'date_created',
            //'date_updated',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Customer $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_customer' => $model->id_customer]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
