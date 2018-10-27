<?php

namespace app\models\sites;

use Yii;

/**
 * This is the model class for table "sitesregion".
 *
 * @property int $id
 * @property string $name
 * @property string $shortname
 * @property string $description
 * @property int $depvis
 * @property int $address_oblid
 * @property int $mustangimport
 * @property int $huawei
 */
class Sitesregion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sitesregion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['depvis', 'address_oblid', 'mustangimport', 'huawei'], 'integer'],
            [['name'], 'string', 'max' => 6],
            [['shortname'], 'string', 'max' => 2],
            [['description'], 'string', 'max' => 30],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'имя',
            'shortname' => 'короткое имя',
            'description' => 'описание',
            'depvis' => 'отображение',
            'address_oblid' => 'область',
            'mustangimport' => 'импорт',
            'huawei' => 'Huawei',
        ];
    }
}
