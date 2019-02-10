<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniVehiculoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uni-vehiculo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inmovilizado') ?>

    <?= $form->field($model, 'alias') ?>

    <?= $form->field($model, 'id_marca') ?>

    <?= $form->field($model, 'id_tipo') ?>

    <?php // echo $form->field($model, 'id_clase') ?>

    <?php // echo $form->field($model, 'id_denom') ?>

    <?php // echo $form->field($model, 'id_aditamento') ?>

    <?php // echo $form->field($model, 'descr') ?>

    <?php // echo $form->field($model, 'modelo') ?>

    <?php // echo $form->field($model, 'serie') ?>

    <?php // echo $form->field($model, 'condicion') ?>

    <?php // echo $form->field($model, 'uso') ?>

    <?php // echo $form->field($model, 'activo') ?>

    <?php // echo $form->field($model, 'propio') ?>

    <?php // echo $form->field($model, 'propietario') ?>

    <?php // echo $form->field($model, 'comentarios') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
