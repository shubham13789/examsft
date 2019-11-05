<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sc_teacher".
 *
 * @property int $sct_id
 * @property int $sc_id
 * @property int $t_id
 */
class ScTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sc_teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sc_id', 't_id'], 'required'],
            [['sc_id', 't_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sct_id' => 'Sct ID',
            'sc_id' => 'Sc ID',
            't_id' => 'T ID',
        ];
    }
}
