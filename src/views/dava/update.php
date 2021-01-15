<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model umutdibek\dava\models\Dava*/

$this->title = 'Update Dava: ' . $model->dosya_id;
$this->params['breadcrumbs'][] = ['label' => 'Davas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dosya_id, 'url' => ['view', 'id' => $model->dosya_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dava-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
