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

$badge_status = '<span class="badge badge-' . (($model->activo) ? 'sucess">' : 'danger">') . $model->status . '</span>';
$heading = $badge_status . '  <i class="glyphicon glyphicon-user"></i> <strong>' . $model->nlargo . '</strong>';

$attributes = [
  [
    'columns' => [
      [
        'attribute' => 'clave',
        'label' => 'FICHA:',
      ],
      [
        'attribute' => 'status',
        'format' => 'raw',
        'label' => 'STATUS:',
      ],
    ],
  ],
  [
    'group' => true,
    'format' => 'raw',
    'label' => 'DATOS PERSONALES',
    'rowOptions' => ['class' => 'table-info'],
  ],
  [
    'columns' => [
      [
        'attribute' => 'nombre',
        'label' => 'NOMBRE:',
        'labelColOptions' => ['style' => 'width: 10%'],
        'valueColOptions' => ['style' => 'width: 20%'],
      ],
      [
        'attribute' => 'ap_pat',
        'label' => 'AP. PATERNO:',
        'labelColOptions' => ['style' => 'width: 10%'],
        'valueColOptions' => ['style' => 'width: 25%'],
      ],
      [
        'attribute' => 'ap_mat',
        'label' => 'AP. MATERNO',
        'labelColOptions' => ['style' => 'width: 10%'],
        'valueColOptions' => ['style' => 'width: 25%'],
      ],
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'ncorto',
        'label' => 'NOM. CORTO:',
        'valueColOptions' => ['style' => 'width: 25%'],
        'labelColOptions' => ['style' => 'width: 20%'],
      ],
      [
        'attribute' => 'apodo',
        'label'=>'SOBRENOMBRE:',
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'curp',
        'label' => 'CURP:',
        'valueColOptions' => ['style' => 'width: 25%'],
        'labelColOptions' => ['style' => 'width: 20%'],
      ],
      [
        'attribute' => 'rfc',
        'label'=>'RFC:',
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'fec_nac',
        'label' => 'FEC. NAC.:',
        'format' => 'date',
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'sexo',
        'label' => 'GENERO:',
      ],
      [
        'attribute' => 'edo_civil',
        'label' => 'EDO. CIVIL:',
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'tel',
        'label' => 'TELEFONO:',
      ],
      [
        'attribute' => 'email',
        'label' => 'CORREO-E:',
      ],
    ]
  ],
  [
    'group' => true,
    'label' => 'DATOS DEL DOMICILIO',
  ],
  [
    'columns' => [
      [
        'attribute' => 'calle_no',
        'label' => 'CALLE Y NUM.',
      ],
      [
        'attribute' => 'colonia',
        'label' => 'COLONIA:',
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'ciudad',
        'label' => 'CIUDAD:',
      ],
      [
        'attribute' => 'estado',
        'label' => 'ESTADO:',
      ],
    ],
  ],
  [
    'columns' => [
      [
        'attribute' => 'pais',
        'label' => 'PAIS:',
      ],
      [
        'attribute' => 'nacionalidad',
        'label' => 'NACIONALIDAD:',
      ]
    ]
  ],
  [
    'group'=>true,
    'label'=>'DATOS LABORALES',
  ],
  [
    'columns' => [
      [
        'attribute' => 'fec_ingreso',
        'label' => 'FEC. DE INGRESO:',
        'format' => 'date',
      ],
      [
        'attribute' => 'fec_planta',
        'label' => 'FEC. PLANTA:',
        'format' => 'date',
      ]
    ],
  ],
  [
    'columns' => [
      [
        'attribute' => 'fec_depto',
        'label' => 'FEC. EN DEPTO.:',
        'format' => 'date',
      ],
      [
        'attribute' => 'fec_cat',
        'label' => 'FEC. EN CATEGORIA:',
        'format' => 'date',
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'reg_cont',
        'label' => 'REG. CONTRACTUAL:',
      ],
      [
        'attribute' => 'reg_sind',
        'label' => 'REG. SINDICAL:',
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
        'vAlign'=>DetailView::ALIGN_MIDDLE,
        'panel'=>[
          'type' => ($model->activo==1) ? DetailView::TYPE_INFO : DetailView::TYPE_DANGER,
          'heading' => $heading,
          'footer'=>'',
          //'<strong>' . 'Trabajador ' . $model->status . '</strong>',
        ],
        'attributes' => $attributes,
    ]) ?>

</div>
