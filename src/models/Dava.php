<?php

namespace umutdibek\dava\models;

use Yii;

/**
 * This is the model class for table "dava".
 *
 * @property int $dosya_id
 * @property string|null $davaci_ismi
 * @property string|null $davaci_edilen_isim
 * @property string|null $created_at
 */
class Dava extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dava';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['davaci_ismi', 'davaci_edilen_isim'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dosya_id' => 'Dosya ID',
            'davaci_ismi' => 'Davaci Ismi',
            'davaci_edilen_isim' => 'Davaci Edilen Isim',
            'created_at' => 'Created At',
        ];
    }
}
