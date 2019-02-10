<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniAditamento */

$this->title = 'Create Uni Aditamento';
$this->params['breadcrumbs'][] = ['label' => 'Uni Aditamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-aditamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
