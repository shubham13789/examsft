<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "academic_year".
 *
 * @property int $ac_id
 * @property int $year
 */
class AcademicYear extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'academic_year';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'required'],
            [['year'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ac_id' => 'Ac ID',
            'year' => 'Year',
        ];
    }
}
