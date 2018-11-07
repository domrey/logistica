<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniParque */

$this->title = 'Update Uni Parque: ' . $model->alias;
$this->params['breadcrumbs'][] = ['label' => 'Uni Parques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->alias, 'url' => ['view', 'id' => $model->alias]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uni-parque-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
