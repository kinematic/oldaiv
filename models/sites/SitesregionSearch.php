<?php

namespace app\models\sites;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\sites\Sitesregion;

/**
 * SitesregionSearch represents the model behind the search form of `app\models\sites\Sitesregion`.
 */
class SitesregionSearch extends Sitesregion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'depvis', 'address_oblid', 'mustangimport', 'huawei'], 'integer'],
            [['name', 'shortname', 'description'], 'safe'],
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
        $query = Sitesregion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'depvis' => $this->depvis,
            'address_oblid' => $this->address_oblid,
            'mustangimport' => $this->mustangimport,
            'huawei' => $this->huawei,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'shortname', $this->shortname])
            ->andFilterWhere(['like', 'description', $this->description]);
			
		$query->orderBy('name');

        return $dataProvider;
    }
}
