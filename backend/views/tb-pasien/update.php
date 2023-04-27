<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbPasien $model */

$this->title = 'Update Tb Pasien: ' . $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Tb Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pasien, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
