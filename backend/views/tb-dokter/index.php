<?php

use common\models\TbDokter;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\TbDokterSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tb Dokters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-dokter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Dokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dokter',
            'nama_dokter',
            'spesialis',
            'alamat',
            'telepon',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TbDokter $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_dokter' => $model->id_dokter]);
                 }
            ],
        ],
    ]); ?>


</div>
