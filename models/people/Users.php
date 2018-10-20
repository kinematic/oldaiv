<?php

namespace app\models\people;

use Yii;
use app\models\address\Obl;

/**
 * This is the model class for table "user".
 *
 * @property string $id
 * @property string $username
 * @property int $login
 * @property string $email
 * @property int $address_oblid
 * @property string $full_name
 * @property string $fam
 * @property string $imya
 * @property string $otch
 * @property string $city
 * @property string $dir
 * @property string $dep
 * @property string $rang
 * @property string $mob
 * @property string $phone
 * @property string $mob_sms
 * @property int $email_news
 * @property int $sites_print_users_log
 * @property int $sites_print_coord
 * @property int $sites_print_climat
 * @property int $sites_print_el
 * @property int $sites_print_sp
 * @property int $sites_print_docum
 * @property int $sites_print_siteaccess
 * @property int $sites_print_siteaccess_limit
 * @property int $sites_print_odfddf
 * @property string $siteaccess_start
 * @property string $siteaccess_finish
 * @property int $keys_give
 * @property int $add_manual
 * @property int $edit_letter_headers
 * @property int $edit_letter_del_users
 * @property string $letter_ishod_number
 * @property string $letter_phone
 * @property string $letter_fax
 * @property int $mol
 * @property int $edit_mol
 * @property int $alarm_del
 * @property int $netcool_days_oss
 * @property int $netcool_days_sa
 * @property int $admin
 * @property int $add_object
 * @property int $status_mdu
 * @property int $tn_access
 * @property int $duty
 * @property int $tab_invent
 * @property int $tab_invent_edit
 * @property string $mustang_name
 * @property int $mail_invent_all
 * @property int $mail_invent_wrong
 * @property int $mail_invent_mol
 * @property int $font_print_size
 * @property int $invent
 * @property int $save_url
 * @property int $resize_photo
 * @property int $inform
 * @property string $md5_pass
 * @property string $pass_last_date
 * @property string $pass_change_md5code
 * @property string $last_visit
 * @property int $SA_send_sms
 * @property int $SA_send_email
 * @property string $SA_filter_expunction
 * @property int $comp_id
 * @property string $rank
 * @property string $el_bez
 * @property string $pass
 * @property string $pass_serial
 * @property string $birthday
 * @property string $place_birth
 * @property string $place_pass
 * @property string $place_live
 * @property string $udostov
 * @property int $inlists
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'address_oblid', 'email_news', 'sites_print_users_log', 'sites_print_coord', 'sites_print_climat', 'sites_print_el', 'sites_print_sp', 'sites_print_docum', 'sites_print_siteaccess', 'sites_print_siteaccess_limit', 'sites_print_odfddf', 'keys_give', 'add_manual', 'edit_letter_headers', 'edit_letter_del_users', 'mol', 'edit_mol', 'alarm_del', 'netcool_days_oss', 'netcool_days_sa', 'admin', 'add_object', 'status_mdu', 'tn_access', 'duty', 'tab_invent', 'tab_invent_edit', 'mail_invent_all', 'mail_invent_wrong', 'mail_invent_mol', 'font_print_size', 'invent', 'save_url', 'resize_photo', 'inform', 'SA_send_sms', 'SA_send_email', 'comp_id', 'inlists'], 'integer'],
            [['fam', 'imya'], 'required'],
            [['siteaccess_start', 'siteaccess_finish', 'pass_last_date', 'last_visit'], 'safe'],
            [['otch','username', 'email', 'mustang_name', 'pass', 'place_birth', 'place_pass', 'place_live'], 'string', 'max' => 100],
            [['full_name', 'SA_filter_expunction'], 'string', 'max' => 255],
            [['fam', 'imya', 'otch', 'city', 'dir', 'dep', 'rang', 'phone'], 'string', 'max' => 250],
			[['mob'], 'string', 'max' => 20],
            [['mob_sms', 'letter_phone', 'letter_fax', 'udostov'], 'string', 'max' => 20],
            [['letter_ishod_number', 'rank'], 'string', 'max' => 50],
            [['md5_pass', 'pass_change_md5code'], 'string', 'max' => 40],
            [['el_bez'], 'string', 'max' => 3],
            [['pass_serial'], 'string', 'max' => 8],
            [['birthday'], 'string', 'max' => 10],
			[['fam', 'imya', 'otch', 'username', 'mob', 'email', 'mustang_name', 'rank', 'el_bez', 'pass', 'pass_serial', 'birthday', 'place_birth', 'place_pass', 'place_live', 'udostov'], 'trim'],
			[['username', 'mob', 'email', 'mustang_name', 'rank', 'el_bez', 'pass', 'pass_serial', 'birthday', 'place_birth', 'place_pass', 'place_live', 'udostov'], 'default', 'value' => null],
		];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'имя пользователя',
            'login' => 'доступ',
			'useraccess' => 'доступ',
            'email' => 'email',
            'address_oblid' => 'область',
			'district.name' => 'область',
            'full_name' => 'Full Name',
            'fam' => 'фамилия',
            'imya' => 'имя',
            'otch' => 'отчество',
			'fio' => 'ФИО',
            'city' => 'City',
            'dir' => 'Dir',
            'dep' => 'Dep',
            'rang' => 'Rang',
            'mob' => '№ телефона',
            'phone' => 'телефон',
            'mob_sms' => 'Mob Sms',
            'email_news' => 'Email News',
            'sites_print_users_log' => 'Sites Print Users Log',
            'sites_print_coord' => 'Sites Print Coord',
            'sites_print_climat' => 'Sites Print Climat',
            'sites_print_el' => 'Sites Print El',
            'sites_print_sp' => 'Sites Print Sp',
            'sites_print_docum' => 'Sites Print Docum',
            'sites_print_siteaccess' => 'Sites Print Siteaccess',
            'sites_print_siteaccess_limit' => 'Sites Print Siteaccess Limit',
            'sites_print_odfddf' => 'Sites Print Odfddf',
            'siteaccess_start' => 'Siteaccess Start',
            'siteaccess_finish' => 'Siteaccess Finish',
            'keys_give' => 'Keys Give',
            'add_manual' => 'Add Manual',
            'edit_letter_headers' => 'редактирование писем',
			'editletters' => 'редактирование писем',
            'edit_letter_del_users' => 'редактирование пользователей',
			'editusers' => 'редактирование пользователей',
            'letter_ishod_number' => 'Letter Ishod Number',
            'letter_phone' => 'Letter Phone',
            'letter_fax' => 'Letter Fax',
            'mol' => 'МОЛ',
			'ismol' => 'МОЛ',
            'edit_mol' => 'Edit Mol',
            'alarm_del' => 'Alarm Del',
            'netcool_days_oss' => 'Netcool Days Oss',
            'netcool_days_sa' => 'Netcool Days Sa',
            'admin' => 'Admin',
            'add_object' => 'Add Object',
            'status_mdu' => 'Status Mdu',
            'tn_access' => 'Tn Access',
            'duty' => 'Duty',
            'tab_invent' => 'Tab Invent',
            'tab_invent_edit' => 'Tab Invent Edit',
            'mustang_name' => 'имя в Мустанге',
            'mail_invent_all' => 'Mail Invent All',
            'mail_invent_wrong' => 'Mail Invent Wrong',
            'mail_invent_mol' => 'Mail Invent Mol',
            'font_print_size' => 'Font Print Size',
            'invent' => 'Invent',
            'save_url' => 'Save Url',
            'resize_photo' => 'Resize Photo',
            'inform' => 'Inform',
            'md5_pass' => 'Md5 Pass',
            'pass_last_date' => 'Pass Last Date',
            'pass_change_md5code' => 'Pass Change Md5code',
            'last_visit' => 'последнее посещение',
            'SA_send_sms' => 'Sa Send Sms',
            'SA_send_email' => 'Sa Send Email',
            'SA_filter_expunction' => 'Sa Filter Expunction',
            'comp_id' => 'компания',
			'company.name' => 'компания',
            'rank' => 'должность',
            'el_bez' => 'группа электробезопасности',
            'pass' => 'паспорт выдан',
            'pass_serial' => 'серия и номер паспорта',
            'birthday' => 'дата рождения',
            'place_birth' => 'место рождения',
            'place_pass' => 'прописка',
            'place_live' => 'место проживания',
            'udostov' => 'номер удостоверения',
            'inlists' => 'Inlists',
        ];
    }
	
	public function getDistrict() {
         return $this->hasOne(Obl::className(), [ 'id' => 'address_oblid' ]);
    }
	
	public function getCompany() {
         return $this->hasOne(Companies::className(), [ 'id' => 'comp_id' ]);
    }
	
	public function getFio() {
         $fio = $this->fam;
		 if ($this->imya) $fio = $fio . ' ' . $this->imya;
		 if ($this->otch) $fio = $fio . ' ' . $this->otch;
		 return $fio;
    }
		
	public function getUseraccess() {
		 return $this->yesorno($this->login);
    }
	
	private function yesorno($number) {
		 if ($number >= 1) return 'да';
		 else return 'нет';
	}
			
	public function getEditletters() {
		 return $this->yesorno($this->edit_letter_headers);
    }
				
	public function getEditusers() {
		 return $this->yesorno($this->edit_letter_del_users);
    }
					
	public function getIsmol() {
		 return $this->yesorno($this->mol);
    }
	
	public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
		
			if($this->login == 0) $this->login = null;
			if($this->edit_letter_headers == 0) $this->edit_letter_headers = null;
			if($this->edit_letter_del_users == 0) $this->edit_letter_del_users = null;
			if(isset($this->mob)) $this->mob = preg_replace('/\s*\(*\)*\-*/', '', $this->mob);
			// else $this->mob = null;
			
            return true;
        } else {
            return false;
        }
    } 
}
