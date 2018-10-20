<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\people\Companies */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Компании', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'name',
			'title:ntext',
            'c',
            'mode',
        ],
    ]) ?>
	
	<?= GridView::widget([
            'dataProvider' => new ArrayDataProvider([
	            'allModels' => $model->users,
	            'key' => 'id',
				'pagination' => false,
	        ]),
	        'caption' => Html::a('<h3>Работники</h3>', ['/contacts', 'siteID' => $model->id], ['title' => 'Редактировать']),
	        'showHeader' => false,
	        'showOnEmpty' => false,
	        'emptyText' => '',
	        'layout' => "{items}",
            'columns' => [
				['class' => 'yii\grid\SerialColumn'],
	            [
	                'attribute' => 'fio',
	                'contentOptions' =>['style' => 'white-space: nowrap'],
	            ],
	            // 'description',
            ]

        ]); 
        ?>

</div>
