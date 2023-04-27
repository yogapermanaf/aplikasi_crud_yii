<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbDokter $model */

$this->title = 'Create Tb Dokter';
$this->params['breadcrumbs'][] = ['label' => 'Tb Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-dokter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
