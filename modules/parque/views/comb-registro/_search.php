<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\CombRegistroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comb-registro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_unidad') ?>

    <?= $form->field($model, 'unidad') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'odometro') ?>

    <?php // echo $form->field($model, 'litros') ?>

    <?php // echo $form->field($model, 'importe') ?>

    <?php // echo $form->field($model, 'comprobante') ?>

    <?php // echo $form->field($model, 'medio') ?>

    <?php // echo $form->field($model, 'instrumento') ?>

    <?php // echo $form->field($model, 'consecutivo') ?>

    <?php // echo $form->field($model, 'clave_trab') ?>

    <?php // echo $form->field($model, 'id_estacion') ?>

    <?php // echo $form->field($model, 'fec_registro') ?>

    <?php // echo $form->field($model, 'usuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
