<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\parque\models\CombRegistroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registro de cargas de combustible';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comb-registro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Nueva Carga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'id_unidad',
            'unidad',
            'fecha',
            'odometro',
            'litros',
            'importe',
            //'comprobante',
            'medio',
            'instrumento',
            //'consecutivo',
            'clave_trab',
            //'id_estacion',
            //'fec_registro',
            //'usuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
