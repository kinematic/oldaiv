<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'login') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'address_oblid') ?>

    <?php // echo $form->field($model, 'full_name') ?>

    <?php // echo $form->field($model, 'fam') ?>

    <?php // echo $form->field($model, 'imya') ?>

    <?php // echo $form->field($model, 'otch') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'dir') ?>

    <?php // echo $form->field($model, 'dep') ?>

    <?php // echo $form->field($model, 'rang') ?>

    <?php // echo $form->field($model, 'mob') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'mob_sms') ?>

    <?php // echo $form->field($model, 'email_news') ?>

    <?php // echo $form->field($model, 'sites_print_users_log') ?>

    <?php // echo $form->field($model, 'sites_print_coord') ?>

    <?php // echo $form->field($model, 'sites_print_climat') ?>

    <?php // echo $form->field($model, 'sites_print_el') ?>

    <?php // echo $form->field($model, 'sites_print_sp') ?>

    <?php // echo $form->field($model, 'sites_print_docum') ?>

    <?php // echo $form->field($model, 'sites_print_siteaccess') ?>

    <?php // echo $form->field($model, 'sites_print_siteaccess_limit') ?>

    <?php // echo $form->field($model, 'sites_print_odfddf') ?>

    <?php // echo $form->field($model, 'siteaccess_start') ?>

    <?php // echo $form->field($model, 'siteaccess_finish') ?>

    <?php // echo $form->field($model, 'keys_give') ?>

    <?php // echo $form->field($model, 'add_manual') ?>

    <?php // echo $form->field($model, 'edit_letter_headers') ?>

    <?php // echo $form->field($model, 'edit_letter_del_users') ?>

    <?php // echo $form->field($model, 'letter_ishod_number') ?>

    <?php // echo $form->field($model, 'letter_phone') ?>

    <?php // echo $form->field($model, 'letter_fax') ?>

    <?php // echo $form->field($model, 'mol') ?>

    <?php // echo $form->field($model, 'edit_mol') ?>

    <?php // echo $form->field($model, 'alarm_del') ?>

    <?php // echo $form->field($model, 'netcool_days_oss') ?>

    <?php // echo $form->field($model, 'netcool_days_sa') ?>

    <?php // echo $form->field($model, 'admin') ?>

    <?php // echo $form->field($model, 'add_object') ?>

    <?php // echo $form->field($model, 'status_mdu') ?>

    <?php // echo $form->field($model, 'tn_access') ?>

    <?php // echo $form->field($model, 'duty') ?>

    <?php // echo $form->field($model, 'tab_invent') ?>

    <?php // echo $form->field($model, 'tab_invent_edit') ?>

    <?php // echo $form->field($model, 'mustang_name') ?>

    <?php // echo $form->field($model, 'mail_invent_all') ?>

    <?php // echo $form->field($model, 'mail_invent_wrong') ?>

    <?php // echo $form->field($model, 'mail_invent_mol') ?>

    <?php // echo $form->field($model, 'font_print_size') ?>

    <?php // echo $form->field($model, 'invent') ?>

    <?php // echo $form->field($model, 'save_url') ?>

    <?php // echo $form->field($model, 'resize_photo') ?>

    <?php // echo $form->field($model, 'inform') ?>

    <?php // echo $form->field($model, 'md5_pass') ?>

    <?php // echo $form->field($model, 'pass_last_date') ?>

    <?php // echo $form->field($model, 'pass_change_md5code') ?>

    <?php // echo $form->field($model, 'last_visit') ?>

    <?php // echo $form->field($model, 'SA_send_sms') ?>

    <?php // echo $form->field($model, 'SA_send_email') ?>

    <?php // echo $form->field($model, 'SA_filter_expunction') ?>

    <?php // echo $form->field($model, 'comp_id') ?>

    <?php // echo $form->field($model, 'rank') ?>

    <?php // echo $form->field($model, 'el_bez') ?>

    <?php // echo $form->field($model, 'pass') ?>

    <?php // echo $form->field($model, 'pass_serial') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'place_birth') ?>

    <?php // echo $form->field($model, 'place_pass') ?>

    <?php // echo $form->field($model, 'place_live') ?>

    <?php // echo $form->field($model, 'udostov') ?>

    <?php // echo $form->field($model, 'inlists') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
