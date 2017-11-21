<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * This is the model class for table "about".
 *
 * @property integer $id
 * @property string $date
 * @property string $subtitle
 * @property string $description
 * @property string $picture
 * @property integer $order
 */
class About extends ActiveRecord
{
    const pathToImg = '\web\img\about\\';
    const pathToImgFront = 'img/about//';

    /**
     * @var UploadedFile
     */
    public $pictureFile;

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
            [['order'], 'required'],
            [['description'], 'string'],
            [['order'], 'integer'],
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
            'order' => 'Order'
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

    /**
     * Возварщает url изображения
     * @return string
     */
    public function getImgUrl(){
        return self::pathToImgFront . $this->picture;
    }
}
