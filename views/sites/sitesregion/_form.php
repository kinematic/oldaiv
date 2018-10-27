<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sites\Sitesregion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sitesregion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shortname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depvis')->textInput() ?>

    <?= $form->field($model, 'address_oblid')->textInput() ?>

    <?= $form->field($model, 'mustangimport')->textInput() ?>

    <?= $form->field($model, 'huawei')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
