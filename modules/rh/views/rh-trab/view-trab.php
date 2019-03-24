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
$heading = '<i class="glyphicon glyphicon-user"></i> <strong>' . $model->nlargo . '</strong>&nbsp;&nbsp;&nbsp;&nbsp;';
// . $badge_status;

$attributes = [
  [
    'columns' => [
      [
        'attribute' => 'ficha',
        'label' => 'Ficha:',
        'format' => 'raw',
        'value' => '<kbd><strong>' . $model->ficha . '</strong></kbd>',
      ],
      [
        'attribute' => 'status',
        'format' => 'raw',
        'label' => 'Status:',
        'value' => $badge_status,
      ],
    ],
  ],
  [
    'group' => true,
    'format' => 'raw',
    'label' => 'DATOS PERSONALES',
    'rowOptions' => ['class' => 'info'],
  ],
  [
    'columns' => [
      [
        'attribute' => 'nombre',
        'label' => 'Nombre:',
        'labelColOptions' => ['style' => 'width: 10%; font-variant: small-caps;'],
        'valueColOptions' => ['style' => 'width: 20%; font-style: italic;'],
      ],
      [
        'attribute' => 'ap_pat',
        'label' => 'Ap. Paterno:',
        'labelColOptions' => ['style' => 'width: 10%; font-variant: small-caps;'],
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
      ],
      [
        'attribute' => 'ap_mat',
        'label' => 'Ap. Materno',
        'labelColOptions' => ['style' => 'width: 10%; font-variant: small-caps;'],
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
      ],
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'ncorto',
        'label' => 'Nom. Corto:',
        'labelColOptions' => ['style' => 'width: 10%; font-variant: small-caps;'],
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
      ],
      [
        'attribute' => 'apodo',
        'label'=>'Sobrenombre:',
        'labelColOptions' => ['style' => 'width: 10%; font-variant: small-caps;'],
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'curp',
        'label' => 'curp:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'rfc',
        'label'=>'rfc:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'fec_nac',
        'label' => 'Fec. Nac.:',
        'format' => 'date',
        'valueColOptions' => ['style' => 'width: 80%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 10%; font-variant: small-caps;'],
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'sexo',
        'label' => 'Género:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'edo_civil',
        'label' => 'Edo. Civil:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'tel',
        'label' => 'Teléfono:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'email',
        'label' => 'Correo-e:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
    ]
  ],
  [
    'group' => true,
    'label' => 'DATOS DEL DOMICILIO',
    'rowOptions' => ['class' => 'info'],
  ],
  [
    'columns' => [
      [
        'attribute' => 'calle_no',
        'label' => 'Calle Y Núm.',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'colonia',
        'label' => 'Colonia:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'ciudad',
        'label' => 'Ciudad:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'estado',
        'label' => 'Entidad:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
    ],
  ],
  [
    'columns' => [
      [
        'attribute' => 'pais',
        'label' => 'País:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'nacionalidad',
        'label' => 'Nacionalidad:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ]
    ]
  ],
  [
    'group'=>true,
    'label'=>'DATOS LABORALES',
    'rowOptions' => ['class' => 'info'],
  ],
  [
    'columns' => [
      [
        'attribute' => 'fec_ingreso',
        'label' => 'Fec. De Ingreso:',
        'format' => 'date',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'fec_planta',
        'label' => 'Fec. Planta:',
        'format' => 'date',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ]
    ],
  ],
  [
    'columns' => [
      [
        'attribute' => 'fec_depto',
        'label' => 'Fec. En Depto.:',
        'format' => 'date',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'fec_cat',
        'label' => 'Fec. En Categoría:',
        'format' => 'date',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ]
    ]
  ],
  [
    'columns' => [
      [
        'attribute' => 'reg_cont',
        'label' => 'Reg. Contractual:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
      ],
      [
        'attribute' => 'reg_sind',
        'label' => 'Reg. Sindical:',
        'valueColOptions' => ['style' => 'width: 25%; font-style: italic;'],
        'labelColOptions' => ['style' => 'width: 20%; font-variant: small-caps;'],
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
          'type' => ($model->activo==1) ? DetailView::TYPE_PRIMARY : DetailView::TYPE_DANGER,
          'heading' => $heading,
          'footer'=>'',
          //'<strong>' . 'Trabajador ' . $model->status . '</strong>',
        ],
        'attributes' => $attributes,
    ]) ?>

</div>
