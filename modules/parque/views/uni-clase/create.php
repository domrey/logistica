<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniClase */

$this->title = 'Create Uni Clase';
$this->params['breadcrumbs'][] = ['label' => 'Uni Clases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-clase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
