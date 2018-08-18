<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "role_access".
 *
 * @property int $id
 * @property int $role_id
 * @property int $access_id
 * @property int $created_time
 */
class RoleAccess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'role_access';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role_id', 'access_id', 'created_time'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role_id' => 'Role ID',
            'access_id' => 'Access ID',
            'created_time' => 'Created Time',
        ];
    }
}
