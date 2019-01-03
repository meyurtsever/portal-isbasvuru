<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bildirituru */

$this->title = 'İlan Kategorisi Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Kategoriler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bildirituru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
