<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ApplicantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Başvurular';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Başvuru Oluştur', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'applicant_id',
            //'user_id',
            [
                'attribute'=>'user_id',
                'value'=>'user.username',
            ],
            //'notice_id',
            [
                'attribute'=>'notice_id',
                'value'=>'notice.header',
            ],
            'name',
            'surname',
            //'experienceforjob:ntext',
            //'cvfilelink',
            //'about_yourself:ntext',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {myButton}',
                'buttons' => [
                'myButton' => function($url, $model) {     // render your custom button
                    //return Html::submitButton('Kaydet', ['class' => 'btn btn-success']);
                    return  Html::a('<span class="fa fa-search"></span>myButton', $url, 
                        [ 'title' => 'ds', 'class'=>'btn btn-primary btn-xs', ]) ;
                }
            ],
            'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'myButton') {
                        $url = \yii\helpers\Url::toRoute(['applicant/create', 'id' => $key]);
                        return $url;
                }
                }
            ],

        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
