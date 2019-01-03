<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BildirilerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


    /*
        <p>
        <?= Html::a('Yeni Bir İlan Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
        <h1><?= Html::encode($this->title) ?></h1>

        */

$this->title = 'İlanlar';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="bildiriler-index">


    <p> <h1><?="Başvuracağınız İlanı Seçiniz" ?></h1> 
        </p>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'self_id',
            //'notice_id',
            [
                'attribute'=>'notice_id',
                'value'=>'notice.category',
            ],
            'header',
            'description:ntext',
            'date',
            //'expired',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{Detay}  {Basvur}',
                'buttons' => [
                'Basvur' => function($url, $model) {                 
                    return  Html::a('<span class="fa fa-search"></span>Basvur', $url, 
                        [ 'title' => 'Basvur', 'class'=>'btn btn-primary', ]) ;
                },
                'Detay' => function($url, $model) {
                    return  Html::a('<span class="fa fa-search"></span>Detay', $url, 
                        [ 'title' => 'Detay', 'class'=>'btn btn-info', ]) ;
                }
            ],
            'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'Basvur') {
                        $url = \yii\helpers\Url::toRoute(['applicant/create']);
                        return $url;
                }
                    if ($action === 'Detay') {
                        $url = \yii\helpers\Url::toRoute(['bildiriler/view', 'id' => $key]);
                        return $url;
                    }
                }
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
