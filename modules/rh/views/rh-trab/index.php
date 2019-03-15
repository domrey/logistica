<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\rh\models\RhTrabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trabajadores';
$this->params['breadcrumbs'][]=['label'=>'Recursos Humanos', 'url'=>'/rh/default'];
$this->params['breadcrumbs'][] = $this->title;

$bordered=true;
$striped=true;
$condensed=false;
$responsive=false;
$hover=true;
$pageSummary=false;
$heading=ucwords($this->title);
$exportConfig='';

// Columnas del GridView
$columns=[
  [
    'class'=>'kartik\grid\SerialColumn',
    'contentOptions' => ['class' => 'kartik-sheet-style'],
  ],

  [
    'attribute'=>'clave',
    'format'=>'raw',
    'label'=>'FICHA',
    'width'=>'100px',
    'hAlign'=>GridView::ALIGN_CENTER,
    'value'=>function($model) {
        return Html::a(sprintf('%07d', $model->clave), ['rh-trab/view', 'id'=>$model->clave]);
    }
  ],
  [
    'attribute'=>'nlargo',
    //'width'=>'400px',
    'label'=>'TRABAJADOR',
    'format'=>'raw',
    'value'=>function($model) {
        return Html::a($model->nlargo, ['rh-trab/view', 'id'=>$model->clave]);
    }
  ],
  [
    'class' => 'kartik\grid\ActionColumn',
    'template'=>'{update}   {delete}',
  ],
];
?>
<div class="rh-trab-index">

<!--  <h1><?= Html::encode($this->title) ?></h1> -->
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $columns,
        // *************************
        'id' => 'form-trabajadores',
        'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'filterRowOptions' => ['class' => 'kartik-sheet-style'],
        'pjax' => true, // pjax is set to always true for this demo
        'toolbar' =>  [
            [
            'content' => Html::a('Registrar Trabajador', ['create'], ['class' => 'btn btn-info']),
            'options' => ['class' => 'btn-group mr-2'],
            ],
            '{export}',
            '{toggleData}',
        ],
        'toggleDataContainer' => ['class' => 'btn-group mr-2'],
        // set export properties
        'export' => [
          'fontAwesome' => false
        ],

        // parameters from the demo form
        'bordered' => $bordered,
        'striped' => $striped,
        'condensed' => $condensed,
        'responsive' => $responsive,
        'hover' => $hover,
        'showPageSummary' => $pageSummary,
        'panel' => [
          'type' => GridView::TYPE_INFO,
          //'type' => GridView::TYPE_PRIMARY,
          'heading' => $heading,
        ],
        'persistResize' => false,
        'toggleDataOptions' => ['minCount' => 10, 'class' => 'btn-group mr-2'],
        'exportConfig' => $exportConfig,
        'itemLabelSingle' => 'trabajador',
        'itemLabelPlural' => 'trabajadores'
    ]);
    ?>
    <?php Pjax::end(); ?>
</div>
