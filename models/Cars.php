<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $id
 * @property string $manufacturer
 * @property string $model
 * @property string $daterelease
 * @property int $horsepower
 * @property string $transmission
 * @property string $capacity
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['manufacturer', 'model', 'daterelease', 'horsepower', 'transmission', 'capacity'], 'required'],
            [['horsepower'], 'integer'],
            [['manufacturer', 'model', 'daterelease', 'transmission', 'capacity'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'manufacturer' => 'Manufacturer',
            'model' => 'Model',
            'daterelease' => 'Daterelease',
            'horsepower' => 'Horsepower',
            'transmission' => 'Transmission',
            'capacity' => 'Capacity',
        ];
    }
}
