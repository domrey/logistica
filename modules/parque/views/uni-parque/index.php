<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\parque\models\UniParqueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parque Vehícular';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uni-parque-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Uni Parque', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'inmovilizado',
            'alias',
            'id_tipo',
            'id_subtipo',
            'id_marca',
            'id_clase',
            'descr',
            'modelo',
            //'serie',
            //'activo',
            //'uso',
            //'propio',
            //'propietario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
