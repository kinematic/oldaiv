<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->fio;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

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
			'district.name',
			'company.name',
            'rank',
            'username',
			'useraccess',
			'last_visit',
            'mob',
			'email:email',
			'editletters',
            'editusers',
			
			// 'ismol',
			'mustang_name',
			'el_bez',
			
			'pass_serial',
			'pass',
            
            'birthday',
            'place_birth',
            'place_pass',
            'place_live',
            'udostov',
            'inlists',
            // 'full_name',
            // 'fam',
            // 'imya',
            // 'otch',
            // 'city',
            // 'dir',
            // 'dep',
            // 'rang',
            
            // 'phone',
            // 'mob_sms',
            // 'email_news:email',
            // 'sites_print_users_log',
            // 'sites_print_coord',
            // 'sites_print_climat',
            // 'sites_print_el',
            // 'sites_print_sp',
            // 'sites_print_docum',
            // 'sites_print_siteaccess',
            // 'sites_print_siteaccess_limit',
            // 'sites_print_odfddf',
            // 'siteaccess_start',
            // 'siteaccess_finish',
            // 'keys_give',
            // 'add_manual',
            
            // 'letter_ishod_number',
            // 'letter_phone',
            // 'letter_fax',
            
            // 'edit_mol',
            // 'alarm_del',
            // 'netcool_days_oss',
            // 'netcool_days_sa',
            // 'admin',
            // 'add_object',
            // 'status_mdu',
            // 'tn_access',
            // 'duty',
            // 'tab_invent',
            // 'tab_invent_edit',
            
            // 'mail_invent_all',
            // 'mail_invent_wrong',
            // 'mail_invent_mol',
            // 'font_print_size',
            // 'invent',
            // 'save_url:url',
            // 'resize_photo',
            // 'inform',
            // 'md5_pass',
            // 'pass_last_date',
            // 'pass_change_md5code',
            
            // 'SA_send_sms',
            // 'SA_send_email:email',
            // 'SA_filter_expunction',

        ],
    ]) ?>

</div>
