<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sites\SitesregionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sitesregion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'shortname') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'depvis') ?>

    <?php // echo $form->field($model, 'address_oblid') ?>

    <?php // echo $form->field($model, 'mustangimport') ?>

    <?php // echo $form->field($model, 'huawei') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
