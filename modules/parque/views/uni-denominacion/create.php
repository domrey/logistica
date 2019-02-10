<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniDenominacion */

$this->title = 'Create Uni Denominacion';
$this->params['breadcrumbs'][] = ['label' => 'Uni Denominacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-denominacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
