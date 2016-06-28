<?php

namespace frontend\assets;
use yii\web\AssetBundle;

class MaterializeAsset extends AssetBundle{
    
    public $sourcePath = '@bower/materialize/dist';
    public $publishOptions = [
        'only' => [
            'css/*.min.css',
            'fonts/roboto/*',
            'js/*.min.js'
        ]
    ];
    public $css = [
        'css/materialize.min.css'
    ];
    public $js = [
        'js/materialize.min.js'
    ];
}