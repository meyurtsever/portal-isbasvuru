<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\isbasvuru\models\NoticecatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'İlan Kategorileri Oluştur';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticecat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('İlan kategorisi oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'notice_id',
            'category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
