<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbDokter $model */

$this->title = 'Update Tb Dokter: ' . $model->id_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Tb Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dokter, 'url' => ['view', 'id_dokter' => $model->id_dokter]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-dokter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
