<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_dokter".
 *
 * @property int $id_dokter
 * @property string $nama_dokter
 * @property string $spesialis
 * @property string $alamat
 * @property string $telepon
 */
class TbDokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dokter', 'spesialis', 'alamat', 'telepon'], 'required'],
            [['nama_dokter', 'spesialis'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['telepon'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dokter' => 'Id Dokter',
            'nama_dokter' => 'Nama Dokter',
            'spesialis' => 'Spesialis',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
        ];
    }
}
