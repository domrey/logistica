<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniParque */

$this->title = $model->alias;
$this->params['breadcrumbs'][] = ['label' => 'Uni Parques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-parque-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->alias], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->alias], [
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
            'inmovilizado',
            'alias',
            'id_tipo',
            'id_subtipo',
            'id_marca',
            'id_clase',
            'descr',
            'modelo',
            'serie',
            'activo',
            'uso',
            'propio',
            'propietario',
        ],
    ]) ?>

</div>
