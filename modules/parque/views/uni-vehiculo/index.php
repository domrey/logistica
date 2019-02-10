<?php

use yii\helpers\Html;
#use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\parque\models\UniVehiculoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades';
$this->params['breadcrumbs'][]=['label'=>'Parque Vehicular', 'url'=>'/parque/default'];
$this->params['breadcrumbs'][] = $this->title;

$columns=[
  ['class'=>'kartik\grid\SerialColumn'],
  [
    'attribute'=>'inmovilizado',
    'format'=>'raw',
    'label'=>'INMOVILIZADO',
    'width'=>'100px',
    'hAlign'=>GridView::ALIGN_CENTER,
  ],
  [
    'attribute'=>'alias',
    'format'=>'raw',
    'label'=>'ECONOMICO',
    'width'=>'80px',
    'hAlign'=>GridView::ALIGN_CENTER,
  ],
  [
    'attribute'=>'descr',
    'label'=>'DESCRIPCION',
    'headerOptions'=>['style'=>'text-align:center'],
  ],
  [
    'attribute'=>'modelo',
    'label'=>'MODELO',
    'hAlign'=>GridView::ALIGN_CENTER,
  ],
  [
    'attribute'=>'serie',
    'label'=>'NUM. SERIE',
    'headerOptions'=>['style'=>'text-align:center'],
  ],
  [
    'attribute'=>'activo',
    'format'=>'raw',
    'label'=>'ACTIVO',
    'hAlign'=>GridView::ALIGN_CENTER,
    'value'=>function($model)
    {
      if ($model->activo==1) {
        return '<span class="label label-success">ACTIVO</span>';
      }
      else {
        return '<span class="label label-default">INACTIVO</span>';
      }
    }
  ],
  ['class' => 'yii\grid\ActionColumn'],
];
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
        'columns' => $columns,
        #[
        #    ['class' => 'yii\grid\SerialColumn'],
#
#            'id',
#            'inmovilizado',
#            'alias',
#            'id_marca',
#            'id_tipo',
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

#            ['class' => 'yii\grid\ActionColumn'],
#        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
