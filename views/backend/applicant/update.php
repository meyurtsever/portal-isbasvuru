<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Applicant */

$this->title = 'Başvuru Güncelle: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Başvurular', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->applicant_id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="applicant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
