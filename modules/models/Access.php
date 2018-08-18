<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "access".
 *
 * @property int $id
 * @property string $title
 * @property string $urls
 * @property int $status
 * @property int $updated_time
 * @property int $created_time
 */
class Access extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'access';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'updated_time', 'created_time'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['urls'], 'string', 'max' => 200],
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
            'urls' => 'Urls',
            'status' => 'Status',
            'updated_time' => 'Updated Time',
            'created_time' => 'Created Time',
        ];
    }
}
