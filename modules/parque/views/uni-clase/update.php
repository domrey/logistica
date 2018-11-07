<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniClase */

$this->title = 'Update Uni Clase: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uni Clases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uni-clase-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
