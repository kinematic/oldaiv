<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\people\Companies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="companies-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="row">
		<div class="col-sm-4">
		<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-sm-4">
		<?= $form->field($model, 'c')->textInput() ?>

		<?= $form->field($model, 'mode')->textInput() ?>
		</div>
	</div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
