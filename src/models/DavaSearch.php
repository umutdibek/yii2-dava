<?php


namespace umutdibek\dava\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;
use umutdibek\dava\models\Dava;

/**
 * DavaSearch represents the model behind the search form of `vendor\umutdibek\yii2_content\src\models\Dava`.
 */
class DavaSearch extends Dava
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dosya_id'], 'integer'],
            [['davaci_ismi', 'davaci_edilen_isim', 'created_at'], 'safe'],
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
        $query = Dava::find();

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
            'dosya_id' => $this->dosya_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'davaci_ismi', $this->davaci_ismi])
            ->andFilterWhere(['like', 'davaci_edilen_isim', $this->davaci_edilen_isim]);

        return $dataProvider;
    }
}
