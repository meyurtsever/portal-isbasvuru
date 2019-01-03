<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bildirituru */

$this->title = 'Kategoriyi Güncelle: ' . $model->category;
$this->params['breadcrumbs'][] = ['label' => 'Kategoriler', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category, 'url' => ['view', 'id' => $model->notice_id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="bildirituru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
