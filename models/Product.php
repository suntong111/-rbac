<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property string $productid
 * @property string $cateid
 * @property string $title
 * @property string $descr
 * @property string $num
 * @property string $price
 * @property string $cover
 * @property string $pics
 * @property string $issale
 * @property string $saleprice
 * @property string $ishot
 * @property int $createtime
 * @property string $ison
 * @property string $istui
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cateid', 'num', 'createtime'], 'integer'],
            ['descr', 'required','message'=> '描述不能为空'],
            [['price', 'saleprice'], 'number'],
            ['title', 'required', 'message' => '标题不能为空'],
            [['istui'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'productid' => 'Productid',
            'cateid' => 'Cateid',
            'title' => 'Title',
            'descr' => 'Descr',
            'num' => 'Num',
            'price' => 'Price',
            'cover' => 'Cover',
            'pics' => 'Pics',
            'issale' => 'Issale',
            'saleprice' => 'Saleprice',
            'ishot' => 'Ishot',
            'createtime' => 'Createtime',
            'ison' => 'Ison',
            'istui' => 'Istui',
        ];
    }
}
