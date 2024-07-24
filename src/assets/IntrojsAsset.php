<?php

namespace matejch\pageGuide\assets;

use yii\web\AssetBundle;

class IntrojsAsset extends AssetBundle
{
    public $sourcePath = '@root/vendor/npm-asset/intro.js';

    public $jsOptions = [
        'defer' => 'defer',
    ];

    public function init()
    {
        $this->js = [
            YII_DEBUG ? 'intro.js' : 'minified/intro.min.js',
        ];
        $this->css = [
            YII_DEBUG ? 'introjs.css' : 'minified/introjs.min.css',
        ];
        parent::init();
    }
}