<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bildiriler */

$this->title = 'Bildiri Güncelle: ' . $model->header;
$this->params['breadcrumbs'][] = ['label' => 'Bildiriler', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->header, 'url' => ['view', 'id' => $model->self_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bildiriler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
