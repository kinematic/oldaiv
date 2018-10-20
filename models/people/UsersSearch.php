<?php

namespace app\models\people;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\people\Users;

/**
 * UsersSearch represents the model behind the search form of `app\models\Users`.
 */
class UsersSearch extends Users
{

	public $fio;
	public $companyID;
	
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'login', 'address_oblid', 'email_news', 'sites_print_users_log', 'sites_print_coord', 'sites_print_climat', 'sites_print_el', 'sites_print_sp', 'sites_print_docum', 'sites_print_siteaccess', 'sites_print_siteaccess_limit', 'sites_print_odfddf', 'keys_give', 'add_manual', 'edit_letter_headers', 'edit_letter_del_users', 'mol', 'edit_mol', 'alarm_del', 'netcool_days_oss', 'netcool_days_sa', 'admin', 'add_object', 'status_mdu', 'tn_access', 'duty', 'tab_invent', 'tab_invent_edit', 'mail_invent_all', 'mail_invent_wrong', 'mail_invent_mol', 'font_print_size', 'invent', 'save_url', 'resize_photo', 'inform', 'SA_send_sms', 'SA_send_email', 'comp_id', 'inlists', 'companyID'], 'integer'],
            [['username', 'email', 'full_name', 'fam', 'imya', 'otch', 'city', 'dir', 'dep', 'rang', 'mob', 'phone', 'mob_sms', 'siteaccess_start', 'siteaccess_finish', 'letter_ishod_number', 'letter_phone', 'letter_fax', 'mustang_name', 'md5_pass', 'pass_last_date', 'pass_change_md5code', 'last_visit', 'SA_filter_expunction', 'rank', 'el_bez', 'pass', 'pass_serial', 'birthday', 'place_birth', 'place_pass', 'place_live', 'udostov', 'fio'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Users::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

		$dataProvider->setSort([
			'attributes' => [
				'id',
				'fio' => [
					'asc' => ['fam' => SORT_ASC, 'imya' => SORT_ASC],
					'desc' => ['fam' => SORT_DESC, 'imya' => SORT_DESC],
					'label' => 'ФИО',
					'default' => SORT_ASC
				],
				// 'country_id'
			],
		]);
		
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        


		$this->fio = trim($this->fio);
		$query->andWhere(
			'fam LIKE "%' . $this->fio . '%" ' . 'OR 
			imya LIKE "%' . $this->fio . '%" ' . 'OR
			otch LIKE "%' . $this->fio . '%"');
		
		$query->andFilterWhere(['like', 'mob', $this->mob]);
			
		$query->andFilterWhere(['comp_id' => $this->companyID]);
			
		$query->orderBy('fam', 'imya');

        return $dataProvider;
    }
}
