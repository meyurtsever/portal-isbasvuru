<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Applicant */

$this->title = 'Başvuru Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Başvurular', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
