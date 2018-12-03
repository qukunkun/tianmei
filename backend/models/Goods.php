<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tm_goods".
 *
 * @property int $id
 * @property int $category_id 类别id
 * @property string $goods_code 商品代码
 * @property string $goods_name 商品名称
 * @property int $goods_number 商品数量
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tm_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id', 'goods_number'], 'integer'],
            [['goods_code', 'goods_name'], 'string', 'max' => 255],
            [['goods_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'goods_code' => 'Goods Code',
            'goods_name' => 'Goods Name',
            'goods_number' => 'Goods Number',
        ];
    }
}
