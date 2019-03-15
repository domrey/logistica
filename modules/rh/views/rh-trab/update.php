<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\rh\models\RhTrab */

$this->title = 'Modificando: ' . $model->ncorto;
$this->params['breadcrumbs'][]=['label'=>'Recursos Humanos', 'url'=>'/rh/default'];
$this->params['breadcrumbs'][] = ['label' => 'Trabajadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => ucwords(strtolower($model->ncorto)), 'url' => ['view', 'id' => $model->clave]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="rh-trab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
