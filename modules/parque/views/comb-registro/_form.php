<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\CombRegistro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comb-registro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_unidad')->textInput() ?>

    <?= $form->field($model, 'unidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'odometro')->textInput() ?>

    <?= $form->field($model, 'litros')->textInput() ?>

    <?= $form->field($model, 'importe')->textInput() ?>

    <?= $form->field($model, 'comprobante')->textInput() ?>

    <?= $form->field($model, 'medio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instrumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consecutivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clave_trab')->textInput() ?>

    <?= $form->field($model, 'id_estacion')->textInput() ?>

    <?= $form->field($model, 'fec_registro')->textInput() ?>

    <?= $form->field($model, 'usuario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
