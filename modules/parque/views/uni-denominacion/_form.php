<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniDenominacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uni-denominacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'texto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
