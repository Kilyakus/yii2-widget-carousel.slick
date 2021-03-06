<?php
namespace kilyakus\widget\slick;

use yii\web\JsExpression;
use yii\web\View;
use yii\helpers\Json;

class Carousel extends \yii\base\Widget
{
    public $container = '.slick';

    public $clientOptions = [];

    public function init()
    {
        
    }

    public function run()
    {
        return $this->registerSlickJs();
    }

    private function registerSlickJs()
    {
        CarouselAssets::register($this->view);

        $jQueryContainer = "$('{$this->container}')";

        if(!empty($this->clientOptions)){
            $var = uniqid('$container');
            $query = "var {$var} =  {$jQueryContainer};".PHP_EOL;

            if(!is_null($this->clientOptions)){
                $opt = Json::encode($this->clientOptions);
                $query .= "{$var}.slick({$opt});".PHP_EOL;
            }else{
                $query .= "{$var}.slick();".PHP_EOL;
            }

            return $this->view->registerJs($query,View::POS_READY);
        }
        return $this->view->registerJs($jQueryContainer.".slick()",View::POS_READY);
    }
} 