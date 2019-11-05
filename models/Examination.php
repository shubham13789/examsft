<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "examination".
 *
 * @property int $ex_id
 * @property int $examination_type
 */
class Examination extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'examination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['examination_type'], 'required'],
            [['examination_type'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ex_id' => 'Ex ID',
            'examination_type' => 'Examination Type',
        ];
    }
}
