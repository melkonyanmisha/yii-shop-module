<?php

namespace backend\modules\shop\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property string $name
 * @property int $status_id
 * @property string|null $created_at
 *
 * @property Statuses $status
 */
class Orders extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'status_id'], 'required'],
            [['status_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Statuses::class, 'targetAttribute' => ['status_id' => 'id']],
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
            'status_id' => 'Status',
            'created_at' => 'Created At',
        ];
    }

	/**
	 * @return array|ActiveRecord[]
	 */
	public function getAllStatuses(){
		return Statuses::find()->asArray()->all();
	}

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Statuses::class, ['id' => 'status_id']);
    }
}
