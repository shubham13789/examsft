<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stud_marks_ex".
 *
 * @property int $stud_marks_ex
 * @property int $stud_id
 * @property int $marks_id
 * @property int $ex_id
 */
class StudMarksEx extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stud_marks_ex';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stud_id', 'marks_id', 'ex_id'], 'required'],
            [['stud_id', 'marks_id', 'ex_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stud_marks_ex' => 'Stud Marks Ex',
            'stud_id' => 'Stud ID',
            'marks_id' => 'Marks ID',
            'ex_id' => 'Ex ID',
        ];
    }
}
