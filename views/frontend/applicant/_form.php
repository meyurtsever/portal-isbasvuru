<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\activeDropDownList;
use yii\helpers\ArrayHelper;
use kouosl\isbasvuru\models\Bildiriler;
use kouosl\isbasvuru\models\User;
use kouosl\isbasvuru\models\Applicant;

/* @var $this yii\web\View */
/* @var $model backend\models\Applicant */
/* @var $form yii\widgets\ActiveForm */

//$user_id = Yii::$app->user->id;

//$model = new Applicant();

/* <?= $form->field($model, 'user_id')->dropDownList(
            ArrayHelper::map(User::find()->all(),'id', 'username'),
            ['prompt'=>'Kullanıcı Seçiniz'])
     ?> */

?>

<div class="applicant-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['readonly' => true, 'value' => Yii::$app->user->id]) ?>

    <!-- <?= $form->field($model, 'notice_id')->textInput() ?> !-->

    <?= $form->field($model, 'notice_id')->dropDownList(
            ArrayHelper::map(Bildiriler::find()->all(),'self_id', 'header'),
            ['prompt'=>'İlan Seçiniz'])
     ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'experienceforjob')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cvfilelink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_yourself')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
