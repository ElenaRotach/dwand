<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_property".
 *
 * @property integer $id
 * @property string $name
 * @property integer $birthday
 * @property string $avatar
 */
class UserProperty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_property';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthday'], 'integer'],
            [['name', 'avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'birthday' => 'Birthday',
            'avatar' => 'Avatar',
        ];
    }
}
