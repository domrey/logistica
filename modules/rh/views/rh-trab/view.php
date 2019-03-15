<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\rh\models\RhTrab */

$this->title = $model->ncorto;
$this->params['breadcrumbs'][]=['label'=>'Recursos Humanos', 'url'=>'/rh/default'];
$this->params['breadcrumbs'][] = ['label' => 'Trabajadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ucwords(strtolower($this->title));
?>
<div class="rh-trab-view">

    <h1>Trabajador: <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->clave], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->clave], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Está seguro que desea eliminar el registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'clave',
            'nombre',
            'ap_pat',
            'ap_mat',
            'ncorto',
            'apodo',
            'activo',
            'curp',
            'rfc',
            'calle_no',
            'colonia',
            'ciudad',
            'estado',
            'pais',
            'nacionalidad',
            'edo_civil',
            'sexo',
            'tel',
            'email:email',
            'fec_cat',
            'fec_depto',
            'fec_planta',
            'fec_ingreso',
            'fec_nac',
            'reg_cont',
            'reg_sind',
        ],
    ]) ?>

</div>
