<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kouosl\isbasvuru\models\Bildirituru;

use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Bildiriler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bildiriler-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'notice_id')->textInput() ?> !-->

    <?= $form->field($model, 'notice_id')->dropDownList(
            ArrayHelper::map(Bildirituru::find()->all(),'notice_id', 'category'),
            ['prompt'=>'İlan Kategorisi Seçiniz'])
     ?>

    <?= $form->field($model, 'header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

   <!-- <?= $form->field($model, 'date')->textInput() ?> !-->

    <?= $form->field($model, 'date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>

    <!-- <?= $form->field($model, 'expired')->textInput() ?>  !-->
    <?= $form->field($model, 'expired')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
