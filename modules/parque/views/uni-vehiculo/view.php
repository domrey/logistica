<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniVehiculo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uni Vehiculos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-vehiculo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'inmovilizado',
            'alias',
            'id_marca',
            'id_tipo',
            'id_clase',
            'id_denom',
            'id_aditamento',
            'descr',
            'modelo',
            'serie',
            'condicion',
            'uso',
            'activo',
            'propio',
            'propietario',
            'comentarios',
        ],
    ]) ?>

</div>
