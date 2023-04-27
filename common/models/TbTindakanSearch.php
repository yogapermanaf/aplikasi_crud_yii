<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TbTindakan;

/**
 * TbTindakanSearch represents the model behind the search form of `common\models\TbTindakan`.
 */
class TbTindakanSearch extends TbTindakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tindakan', 'id_pasien'], 'integer'],
            [['tgl_tindakan', 'tindakan'], 'safe'],
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
        $query = TbTindakan::find();

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
            'id_tindakan' => $this->id_tindakan,
            'id_pasien' => $this->id_pasien,
            'tgl_tindakan' => $this->tgl_tindakan,
        ]);

        $query->andFilterWhere(['like', 'tindakan', $this->tindakan]);

        return $dataProvider;
    }
}
