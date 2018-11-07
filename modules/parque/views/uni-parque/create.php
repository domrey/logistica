<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\UniParque */

$this->title = 'Create Uni Parque';
$this->params['breadcrumbs'][] = ['label' => 'Uni Parques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-parque-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
