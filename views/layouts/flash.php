<?php

use yii\helpers\Html;
use kartik\widgets\AlertBlock;
use kartik\widgets\Alert;

echo AlertBlock::widget([
    'useSessionFlash' => true,
    'type' => AlertBlock::TYPE_ALERT,
    'delay' => 0,
    'alertSettings' => [
        'error' => ['id' => 'flash-alerts', 'type' => Alert::TYPE_DANGER, 'icon' => 'fa-warning', 'iconOptions' => ['class' => 'fa'], 'options' => ['style' => 'margin-bottom: 0px;']],
        'success' => ['id' => 'flash-alerts', 'type' => Alert::TYPE_SUCCESS, 'icon' => 'fa-thumbs-up', 'iconOptions' => ['class' => 'fa'], 'options' => ['style' => 'margin-bottom: 0px;']],
        'info' => ['id' => 'flash-alerts', 'type' => Alert::TYPE_INFO, 'icon' => '', 'options' => ['style' => 'margin-bottom: 0px;']],
        'warning' => ['id' => 'flash-alerts', 'type' => Alert::TYPE_WARNING, 'icon' => '', 'options' => ['style' => 'margin-bottom: 0px;']],
        'primary' => ['id' => 'flash-alerts', 'type' => Alert::TYPE_PRIMARY, 'icon' => '', 'options' => ['style' => 'margin-bottom: 0px;']],
        'default' => ['id' => 'flash-alerts', 'type' => Alert::TYPE_DEFAULT, 'icon' => '', 'options' => ['style' => 'margin-bottom: 0px;']]
    ],
    'options' => [
        'style' => 'font-size: 3em;'
    ]
]);

$this->registerJs(
    "$('document').ready(function(){
        if($('.modal').length) {
            $('.modal').modal('hide');
            if($('.modal #response').length) {
                $('#response').html($('.modal #response').children());
            }
        }
        alertClose();
    });"
);