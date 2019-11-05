<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $stud_id
 * @property int $stud_name
 * @property int $stud_rollno
 * @property int $sc_id
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stud_name', 'stud_rollno', 'sc_id'], 'required'],
            [['stud_name', 'stud_rollno', 'sc_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stud_id' => 'Stud ID',
            'stud_name' => 'Stud Name',
            'stud_rollno' => 'Stud Rollno',
            'sc_id' => 'Sc ID',
        ];
    }
}
