<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniVehiculo */

$this->title = 'Create Uni Vehiculo';
$this->params['breadcrumbs'][] = ['label' => 'Uni Vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-vehiculo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
