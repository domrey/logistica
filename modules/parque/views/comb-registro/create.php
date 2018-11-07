<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\parque\models\CombRegistro */

$this->title = 'Create Comb Registro';
$this->params['breadcrumbs'][] = ['label' => 'Comb Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comb-registro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
