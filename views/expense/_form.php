<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Expense */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="expense-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_category')->textInput() ?>

    <?= $form->field($model, 'id_customer')->textInput() ?>

    <?= $form->field($model, 'expense_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deleted')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'date_updated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
