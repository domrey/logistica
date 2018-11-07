<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniParque */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uni-parque-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inmovilizado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_tipo')->textInput() ?>

    <?= $form->field($model, 'id_subtipo')->textInput() ?>

    <?= $form->field($model, 'id_marca')->textInput() ?>

    <?= $form->field($model, 'id_clase')->textInput() ?>

    <?= $form->field($model, 'descr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modelo')->textInput() ?>

    <?= $form->field($model, 'serie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activo')->textInput() ?>

    <?= $form->field($model, 'uso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'propio')->textInput() ?>

    <?= $form->field($model, 'propietario')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
