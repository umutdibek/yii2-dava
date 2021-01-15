<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model umutdibek\dava\models\Dava */

$this->title = 'Create Dava';
$this->params['breadcrumbs'][] = ['label' => 'Davas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dava-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
