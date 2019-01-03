<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;

$this->title = 'Anasayfa Ekranı';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;


Portlet::begin(['title' => ' İş Başvuru Modülü','icon' => 'glyphicon glyphicon-home']);

//Portlet::begin(['title' => $this->title,'subTitle' => ' iş başvuru modülü','icon' => 'glyphicon glyphicon-cog']);

echo $this->render('index');

Portlet::end();



