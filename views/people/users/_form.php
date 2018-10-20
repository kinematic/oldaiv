<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\address\Obl;
use app\models\people\Users;
use app\models\people\Companies;
use yii\jui\AutoComplete;
// use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="row">
		<div class="col-sm-4">
		<?= $form->field($model, 'fam')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'address_oblid')->dropDownList(ArrayHelper::map(Obl::find()->addOrderBy('name')->all(), 'id', 'name'), ['prompt' => '']) ?>
		<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'login')->dropDownList([
			'0' => 'отключен',
			'1' => 'активный',
			// '2' => 'Удален'
		]) ?>
		</div>
		<div class="col-sm-4">
		<?= $form->field($model, 'imya')->widget(
		AutoComplete::className(), [            
			'clientOptions' => [
				'placeholder' => 'введите имя',
				'source' => Users::find()
					->select(['imya as value', 'imya as label'])
					->where('otch IS NOT NULL')
					->groupBy('imya')
					->orderBy('imya')
					->asArray()
					->all(),
			],
			'options'=>[
				'class'=>'form-control'
			]
		]);
	?>
		
		
		<?= $form->field($model, 'comp_id')->dropDownList(ArrayHelper::map(Companies::find()->addOrderBy('name')->all(), 'id', 'name'), ['prompt'=>'']) ?>
		<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'edit_letter_headers')->dropDownList([
			'0' => 'отключен',
			'1' => 'активный',
			// '2' => 'Удален'
		]) ?>
		</div>
		<div class="col-sm-4">
		<?= $form->field($model, 'otch')->widget(
			    AutoComplete::className(), [            
			        'clientOptions' => [
                        'placeholder' => 'введите отчество',
			            'source' => Users::find()
						    ->select(['otch as value', 'otch as label'])
							->where('otch IS NOT NULL')
							->groupBy('otch')
							->orderBy('otch')
						    ->asArray()
						    ->all(),
			        ],
			        'options'=>[
			            'class'=>'form-control'
			        ]
			    ]);
			?>
		
		<?= $form->field($model, 'rank')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'mob')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'edit_letter_del_users')->dropDownList([
			'0' => 'отключен',
			'1' => 'активный',
			// '2' => 'Удален'
		]) ?>
		</div>
	</div>
	
	<h2>Документы</h2>
	<div class="row">
		<div class="col-sm-4">
		<?= $form->field($model, 'birthday')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'place_birth')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'el_bez')->dropDownList([
			'' => '',
			'III' => 'III',
			'IV' => 'IV',
			'V' => 'V'
		]) ?>
		</div>
		<div class="col-sm-4">
		<?= $form->field($model, 'pass_serial')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'place_pass')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'udostov')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-sm-4">
		<?= $form->field($model, 'pass')->textInput(['maxlength' => true]) ?>
		<?= $form->field($model, 'place_live')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

	<h2>Прочее</h2>
	
	<div class="row">
		<div class="col-sm-6">
		<?= $form->field($model, 'mustang_name')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-sm-6">
		<?= $form->field($model, 'inlists')->textInput() ?>
		</div>
	</div>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
