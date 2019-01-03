<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bildiriler */

$this->title = $model->header;
$this->params['breadcrumbs'][] = ['label' => 'Bildiriler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bildiriler-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->self_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->self_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Silinecek. Devam edilsin mi?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'self_id',
            'notice_id',
            'header',
            'description:ntext',
            'date',
            'expired',
        ],
    ]) ?>

</div>
