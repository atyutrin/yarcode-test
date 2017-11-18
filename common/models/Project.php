<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property string $title
 * @property string $subtitle
 * @property string $description
 * @property string $picture
 * @property string $date
 * @property string $client
 * @property string $category
 */
class Project extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'subtitle', 'description'], 'required'],
            [['description'], 'string'],
            [['title', 'picture'], 'string', 'max' => 128],
            [['subtitle'], 'string', 'max' => 256],
            [['date', 'client', 'category'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'description' => 'Description',
            'picture' => 'Picture',
            'date' => 'Date',
            'client' => 'Client',
            'category' => 'Category',
        ];
    }
}
