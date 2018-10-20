<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\people\Companies;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'fio',
			[
				'attribute' => 'company.name',                 
				'value' => 'company.name',
				'filter' => Html::activeDropDownList(
					$searchModel,
					'companyID',
					ArrayHelper::map(Companies::find()->select(['id', 'name'])->asArray()->orderBy('name')->all(),
					'id',
					'name'
					),
					[
						'class' => 'form-control',
						'prompt' => '',
					]
				)
			],
			'mob',		

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
