<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marks".
 *
 * @property int $marks_id
 * @property string $marks
 */
class Marks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marks'], 'required'],
            [['marks'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'marks_id' => 'Marks ID',
            'marks' => 'Marks',
        ];
    }
}
