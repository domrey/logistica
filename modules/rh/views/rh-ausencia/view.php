<?php

use yii\helpers\Html;
// use yii\widgets\DetailView;
use kartik\detail\DetailView;
use app\modules\rh\models\RhAusencia;

/* @var $this yii\web\View */
/* @var $model app\modules\rh\models\RhAusencia */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Recursos Humanos', 'url' => ['/rh/default']];
$this->params['breadcrumbs'][] = ['label' => 'Ausencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;

$btnUpdate = Html::a('Modificar', ['update', 'id'=>$model->id], ['class'=>'btn btn-primary']);
$btnDelete = Html::a('Borrar', ['delete', 'id'=>$model->id], ['class'=>'btn btn-danger', 'data'=>['confirm'=>'¿En verdad desea borrar el registro?', 'method'=>'post']]);
$frmHeader = '<big><i class="glyphicon glyphicon-log-out"></i>&nbsp;Detalles de la ausencia ' . '<kbd>' . $model->id . '</kbd>' . '</big>';
$detailHeading = $frmHeader . '<div  style="clear" class="pull-right">' . $btnUpdate . '&nbsp;&nbsp;' . $btnDelete . '&nbsp;&nbsp' . '</div>';
?>
<div class="rh-ausencia-view">

<?php
  $attributes = [
    [
        'group'=>true,
        'label'=>'DATOS DEL TRABAJADOR',
        'rowOptions'=>['class'=>'table-info']
    ],
    [
      'columns'=> [
        [
          'attribute'=>'clave_trab',
          'format'=>'raw',
          'value'=>$model->clave_trab,
          'label'=>'FICHA:',
          // 'displayOnly'=>true,
        ],
        [
          'attribute'=>'clave_trab',
          'label'=>'TRABAJADOR',
          'format'=>'raw',
          'displayOnly'=>true,
          'value'=>$model->trabName,
        ],
      ],
    ],
    [
      'columns'=>[
        [
          'attribute'=>'clave_plaza',
          'label'=>'CLAVE PLAZA:',
        ],
      ],
    ],
    [
      'group'=>true,
      'label'=>'INFORMACION DE LA AUSENCIA',
    ],
    [
      'columns'=>[
        [
          'attribute'=>'clave_motivo',
          'format'=>'raw',
          'displayOnly'=>true,
          'value'=>$model->motivoCobertura,
          'label'=>'MOTIVO:'
        ],
      ],
    ],
    [
      'attribute'=>'fec_inicio',
      'format'=>'date',
      'type'=>DetailView::INPUT_DATE,
      'label'=>'INICIO:',
    ],
    [
      'attribute'=>'fec_termino',
      'format'=>'date',
      'type'=>DetailView::INPUT_DATE,
      'label'=>'TERMINO:',
    ],
    [
      'attribute'=>'descr',
      'format'=>'raw',
      'label'=>'DESCRIPCIÓN:',
      'value'=>'<span class="text-justify"><em>' . $model->descr . '</em></span>',
      'type'=>DetailView::INPUT_TEXTAREA,
      'options'=>['rows'=>4],
    ],
  ];
 ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => $attributes,
        'mode' => DetailView::MODE_VIEW,
        'enableEditMode'=>false,
        'hideIfEmpty'=>false,
        'notSetIfEmpty'=>false,
        'bordered' => true,
        'striped' =>false,
        'condensed' =>false,
        'responsive' =>true,
        'hover' =>true,
        'hAlign'=>DetailView::ALIGN_CENTER,
        'vAlign'=>DetailView::ALIGN_MIDDLE,
        'fadeDelay'=>500,
        // 'mainTemplate'=>'{buttons}{detail}',
        // 'buttonContainer'=>[
          // 'buttons1'=>'{update}{delete}',
        // ],
        // 'viewAttributeContainer'=>[
          // 'style'=>'border: 1px Solid Green;',
        // ],
        // 'viewButtonsContainer'=>[
          // 'style'=>'border: 1px Solid Red;',
        // ],
        // 'viewOptions'=>[
          // 'label'=>'Prueba',
        // ],
        'panel' => [
            'type' => DetailView::TYPE_DEFAULT,
            'heading'=> $detailHeading,
            // 'headingOptions'=>[
              // 'template'=>'{title}',
              // 'template'=>'{title}{buttons}',
            // ],
            'footer' =>false,
        ],
    ]) ?>

</div>
