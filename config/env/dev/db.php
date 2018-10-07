<?php
    return [
        'dsn'=>'sqlite:/'.__DIR__.'/../../../runtime/db.sqlite',
        //'dsn'=>'sqlite:/' . \Yii::getAlias('@app') . '/runtime/db.sqlite',
        'class'=>'yii\db\Connection',
        'charset'=>'utf8'
    ];

?>
