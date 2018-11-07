<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\CombRegistro */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comb Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comb-registro-view">

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
            'id_unidad',
            'unidad',
            'fecha',
            'odometro',
            'litros',
            'importe',
            'comprobante',
            'medio',
            'instrumento',
            'consecutivo',
            'clave_trab',
            'id_estacion',
            'fec_registro',
            'usuario',
        ],
    ]) ?>

</div>
