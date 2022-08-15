<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Navigation".
 *
 * @property int $id
 * @property string $title
 * @property string|null $subtitle
 * @property string|null $information
 * @property string|null $description
 * @property int|null $parend_id
 */
class Navigation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Navigation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['information', 'description'], 'string'],
            [['parend_id'], 'integer'],
            [['title', 'subtitle'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'information' => 'Information',
            'description' => 'Description',
            'parend_id' => 'Parend ID',
        ];
    }
}
