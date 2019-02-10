<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\parque\models\UniVehiculoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uni Vehiculos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-vehiculo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Uni Vehiculo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inmovilizado',
            'alias',
            'id_marca',
            'id_tipo',
            //'id_clase',
            //'id_denom',
            //'id_aditamento',
            //'descr',
            //'modelo',
            //'serie',
            //'condicion',
            //'uso',
            //'activo',
            //'propio',
            //'propietario',
            //'comentarios',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
