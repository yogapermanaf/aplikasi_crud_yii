<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_pasien".
 *
 * @property int $id_pasien
 * @property string $nama
 * @property int $umur
 * @property string $alamat
 * @property string $jenis_kelamin
 *
 * @property TbTindakan[] $tbTindakans
 */
class TbPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'umur', 'alamat', 'jenis_kelamin'], 'required'],
            [['umur'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['jenis_kelamin'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama' => 'Nama',
            'umur' => 'Umur',
            'alamat' => 'Alamat',
            'jenis_kelamin' => 'Jenis Kelamin',
        ];
    }

    /**
     * Gets query for [[TbTindakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbTindakans()
    {
        return $this->hasMany(TbTindakan::class, ['id_pasien' => 'id_pasien']);
    }
}
