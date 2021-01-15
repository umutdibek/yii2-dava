<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model umutdibek\dava\models\Dava */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dava-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'davaci_ismi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'davaci_edilen_isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
