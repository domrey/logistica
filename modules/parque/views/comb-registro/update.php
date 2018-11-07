<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\CombRegistro */

$this->title = 'Update Comb Registro: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comb Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comb-registro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
