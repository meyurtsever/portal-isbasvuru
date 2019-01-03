<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ApplicantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


/* <p>
        <?= Html::a('Başvuru Oluştur', ['create'], ['class' => 'btn btn-success']) ?>

        <h1><?= Html::encode($this->title) ?></h1>
    </p> */

$this->title = 'Başvurular';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicant-index">

    
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    	<h1><?= "Bu ekranı görüntülemek için yeterli yetkiniz yoktur." ?></h1>
    <?php Pjax::end(); ?>
</div>
