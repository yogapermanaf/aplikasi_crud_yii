<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TbDokterSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-dokter-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?= $form->field($model, 'nama_dokter') ?>

    <?= $form->field($model, 'spesialis') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'telepon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
