<?php

//use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;
use kartik\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\rh\models\RhTrab */

$this->title = $model->ncorto;
$this->params['breadcrumbs'][]=['label'=>'Recursos Humanos', 'url'=>'/rh/default'];
$this->params['breadcrumbs'][] = ['label' => 'Fichero', 'url' => ['/rh/rh-trab/list']];
$this->params['breadcrumbs'][] = ucwords(strtolower($this->title));

$attributes = [
  [
    'group'=>true,
    'format'=>'raw',
    'label'=>'STATUS: ' . ($model->activo==1) ? '<span class="badge badge-success">ACTIVO</span>' : '<span class="badge badge-danger">INACTIVO</span>',
    'value'=> ($model->activo==1) ? '<span class="badge badge-success">ACTIVO</span>' : '<span class="badge badge-danger">INACTIVO</span>',
  ],
  [
    'group'=>true,
    'label'=>'DATOS PERSONALES',
    'rawOptions'=>['class'=>'table-info'],
  ],
  [
    'columns'=> [
      [
        'attribute'=>'nombre',
        'label'=>'NOMBRE',
        'displayOnly'=>true,
        'valueColOptions'=>['style'=>'width:20%'],
      ],
      [
        'attribute'=>'ap_pat',
        'label'=>'PATERNO',
        'valueColOptions'=>['style'=>'width:20%'],
      ],
      [
        'attribute'=>'ap_mat',
        'label'=>'MATERNO',
        'valueColOptions'=>['style'=>'width:20%'],
      ],
    ],
  ],
  [
    'columns'=>[
      [
        'attribute'=>'ncorto',
        'label'=>'NOM. CORTO',
      ],
      [
        'attribute'=>'apodo',
        'label'=>'SOBRENOMBRE',
      ],
    ]
  ],
  [
    'columns'=>[
      [
        'attribute'=>'fec_nac',
        'format'=>'date',
        'type'=>DetailView::INPUT_DATE,
        'widgetOptions'=> [
          'pluginOptions'=>['format'=>'yyyy-mm-dd'],
        ],
        'label'=>'FEC. NAC.',
        //'value'=>function() {
        //  isset($model->fec_nac) ? $model->fec_nac : '';
        //}
      ],
      [
        'attribute'=>'curp',
        'label'=>'CURP',
      ],
      [
        'attribute'=>'rfc',
        'label'=>'RFC',
      ],
    ],
  ],
  [
    'columns'=>[
      [
        'attribute'=>'edo_civil',
        'label'=>'ESTADO CIVIL',
      ],
      [
        'attribute'=>'sexo',
        'label'=>'GENERO',
      ],
    ],
  ],
  [
    'columns'=>[
      [
        'attribute'=>'tel',
        'label'=>'TELEFONO',
      ],
      [
        'attribute'=>'email',
        'label'=>'CORREO-E',
      ],
    ],
  ],
  [
    'group'=>true,
    'rowOptions'=>['class'=>'table-info'],
    'label'=>'DOMICILIO',
  ],
  [
    'columns'=> [
      [
      'attribute'=>'calle_no',
      'label'=>'CALLE Y NÚMERO',
      ],
      [
        'attribue'=>'colonia',
        'label'=>'COLONIA:',
      ]
    ],
    'columns' => [
      [
        'attribute'=>'ciudad',
        'label'=>'CIUDAD',
      ],
      [
        'attribute'=>'estado',
        'label'=>'ESTADO',
      ],
    ],
  ],
  [
    'columns'=>[
      [
        'attribute'=>'pais',
        'label'=>'PAIS',
      ],
      [
        'attribute'=>'nacionalidad',
        'label'=>'NACIONALIDAD',
      ],
    ],
  ],
  [
    'group'=>true,
    'rowOptions'=>['class'=>'table-info'],
    'label'=>'DATOS DE TRABAJO',
  ],
  [
    'columns'=> [
      [
        'attribute'=>'fec_ingreso',
        'label'=>'FEC. INGRESO',
      ],
      [
        'attribute'=>'fec_planta',
        'label'=>'FEC. PLANTA',
      ],
      [
        'attribute'=>'fec_depto',
        'label'=>'EN DEPTO.',
      ],
      [
        'attribute'=>'fec_cat',
        'label'=>'FEC. CATEGORIA',
      ]
    ]
  ]
];

?>
<div class="rh-trab-view">

<!--    <h3><?= Html::encode($this->title) ?></h3> -->

<h3>Datos del trabajador</h3>

    <?= DetailView::widget([
        'model' => $model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
        'enableEditMode'=>false,
        'hAlign'=>DetailView::ALIGN_LEFT,
        'panel'=>[
//          'heading'=>'FICHA: ' . '<strong>' . $model->clave . '</strong>',
          'heading'=>'<strong>' . $model->nlargo . '</strong>',
          // . ($model->activo==1) ? '<span class="badge badge-success">ACTIVO</span>' : '<span class="badge badge-danger">INACTIVO</span></span>',
          //'type'=>DetailView::TYPE_INFO,
          'type'=>$model->activo?DetailView::TYPE_INFO:DetailView::TYPE_DANGER,
        ],
        'attributes' => $attributes,
    ]) ?>

</div>
