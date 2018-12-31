<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\isbasvuru\models\Noticecat */

$this->title = 'Update Noticecat: ' . $model->notice_id;
$this->params['breadcrumbs'][] = ['label' => 'Noticecats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->notice_id, 'url' => ['view', 'id' => $model->notice_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="noticecat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
