<?php
namespace kilyakus\widget\slick;

class CarouselAssets extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/slick-carousel';
    public $css = [
        'slick/slick.css'
    ];
    public $js = [
        "slick/slick.min.js",
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $publishOptions = [
        'forceCopy' => true
    ];
} 
