<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TbDokter;

/**
 * TbDokterSearch represents the model behind the search form of `common\models\TbDokter`.
 */
class TbDokterSearch extends TbDokter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dokter'], 'integer'],
            [['nama_dokter', 'spesialis', 'alamat', 'telepon'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TbDokter::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_dokter' => $this->id_dokter,
        ]);

        $query->andFilterWhere(['like', 'nama_dokter', $this->nama_dokter])
            ->andFilterWhere(['like', 'spesialis', $this->spesialis])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'telepon', $this->telepon]);

        return $dataProvider;
    }
}
