<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniDenominacion */

$this->title = 'Update Uni Denominacion: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uni Denominacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uni-denominacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
