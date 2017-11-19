<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "about_record".
 *
 * @property integer $id
 * @property string $date
 * @property string $subtitle
 * @property string $description
 * @property string $picture
 */
class About extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['date'], 'string', 'max' => 64],
            [['subtitle', 'picture'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'subtitle' => 'Subtitle',
            'description' => 'Description',
            'picture' => 'Picture',
        ];
    }
}
