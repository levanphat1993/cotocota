<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_tree_".
 *
 * @property int $id
 * @property string $name the textual name of the node
 * @property string|null $subtitle
 * @property string|null $description
 * @property int $parent_id the nodes parent - pretty clasic
 * @property int $seqid the generated order item for the whole tree
 * @property int $depth how deep the node is (usefull for indenting)
 * @property int $leaf  is it a leaf node (eg. has no children) - usefull for icons
 * @property string|null $fullpath
 * @property string|null $url
 */
class _tree_ extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '_tree_';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description', 'fullpath', 'url'], 'string'],
            [['parent_id', 'seqid', 'depth', 'leaf'], 'integer'],
            [['name', 'subtitle'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'subtitle' => 'Subtitle',
            'description' => 'Description',
            'parent_id' => 'Parent ID',
            'seqid' => 'Seqid',
            'depth' => 'Depth',
            'leaf' => 'Leaf',
            'fullpath' => 'Fullpath',
            'url' => 'Url',
        ];
    }
}
