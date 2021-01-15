<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */

/* @var $searchModel umutdibek\dava\models\DavaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dava';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dava-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Anasayfa', ['index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'dosya_id',
            'davaci_ismi',
            'davaci_edilen_isim',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
