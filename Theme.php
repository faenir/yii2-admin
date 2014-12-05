<?php

namespace fourteenmeister\admin;

use Yii;

class Theme extends \yii\base\Theme
{
    /**
     * @inheritdoc
     */
    public $pathMap = [
        '@backend/views' => '@fourteenmeister/admin/views',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}
