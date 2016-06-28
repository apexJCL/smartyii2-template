<?php

namespace frontend\assets;
use yii\web\AssetBundle;

class JQueryAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery/dist';
    public $js = [
        'jquery.min.js'
    ];

}