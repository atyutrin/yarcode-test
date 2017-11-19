<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;

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
    const pathToImg = '\web\img\projects\\';

    /**
     * @var UploadedFile
     */
    public $pictureFile;

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
            [['pictureFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg']
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
            'pictureFile' => 'Picture',
            'date' => 'Date',
            'client' => 'Client',
            'category' => 'Category',
        ];
    }

    /**
     * Upload file
     * @return bool
     */
    public function upload()
    {
        if ($this->validate() && $this->pictureFile) {
            $path = \Yii::getAlias('@frontend') . self::pathToImg;
            $this->picture = $this->pictureFile->baseName . '.' . $this->pictureFile->extension;
            $this->pictureFile->saveAs($path . $this->picture);
            $this->pictureFile = null;
            return true;
        } else {
            return false;
        }
    }
}