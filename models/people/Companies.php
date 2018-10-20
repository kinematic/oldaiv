<?php

namespace app\models\people;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property int $id
 * @property string $name
 * @property int $c
 * @property string $title
 * @property int $mode
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['c', 'mode'], 'integer'],
            [['title'], 'string'],
            [['name'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'простое название',
            'c' => 'позиция',
            'title' => 'официальное название',
            'mode' => 'режим',
        ];
    }
		
	public function getUsers() {
         return $this->hasMany(Users::className(), [ 'comp_id' => 'id' ])->orderBy('fam, imya');;
    }
}
