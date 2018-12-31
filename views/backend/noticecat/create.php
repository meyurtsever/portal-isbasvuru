<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\isbasvuru\models\Noticecat */

$this->title = 'Create Noticecat';
$this->params['breadcrumbs'][] = ['label' => 'Noticecats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticecat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
