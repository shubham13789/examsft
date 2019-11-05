<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_cource".
 *
 * @property int $sc_id
 * @property int $s_id
 * @property int $c_id
 * @property int $ac_id
 */
class SubCource extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_cource';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['s_id', 'c_id', 'ac_id'], 'required'],
            [['s_id', 'c_id', 'ac_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sc_id' => 'Sc ID',
            's_id' => 'S ID',
            'c_id' => 'C ID',
            'ac_id' => 'Ac ID',
        ];
    }
}
