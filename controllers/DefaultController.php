<?php

namespace fourteenmeister\admin\controllers;

use fourteenmeister\admin\components\Controller;
use yii\captcha\CaptchaAction;
use yii\web\ErrorAction;
use yii\web\ViewAction;

/**
 * Frontend main controller.
 */
class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::className()
            ],
            'about' => [
                'class' => ViewAction::className(),
                'defaultView' => 'about'
            ],
        ];
    }

    /**
     * Site "Home" page.
     */
    public function actionIndex()
    {
        $this->layout = 'main';
        return $this->render('index');
    }
}