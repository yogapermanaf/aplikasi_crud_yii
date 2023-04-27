<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_tindakan".
 *
 * @property int $id_tindakan
 * @property int $id_pasien
 * @property string $tgl_tindakan
 * @property string $tindakan
 *
 * @property TbPasien $pasien
 */
class TbTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'tgl_tindakan', 'tindakan'], 'required'],
            [['id_pasien'], 'integer'],
            [['tgl_tindakan'], 'safe'],
            [['tindakan'], 'string', 'max' => 255],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => TbPasien::class, 'targetAttribute' => ['id_pasien' => 'id_pasien']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'id_pasien' => 'Id Pasien',
            'tgl_tindakan' => 'Tgl Tindakan',
            'tindakan' => 'Tindakan',
        ];
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(TbPasien::class, ['id_pasien' => 'id_pasien']);
    }
}
