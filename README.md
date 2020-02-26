yii2-widget-carousel.slick
==========

Demos: [http://kenwheeler.github.io/slick/](http://kenwheeler.github.io/slick/ "http://kenwheeler.github.io/slick/")

```
use kilyakus\widget\slick\Carousel;
```

```
echo Carousel::widget([
	'container' => '.slider-for',
	'clientOptions'  => [
		'accessibility' => false,
		'centerMode' => false,
		// 'variableWidth' => true,
		'slidesToShow' => 5,
		'slidesToScroll' => 1,
		'arrows' => true,
		'asNavFor' => '.slider-for',
		'dots' => false,
		'infinite' => false,
		'focusOnSelect' => true,
		'swipeToSlide' => true,
		'onBeforeChange'=> new JsExpression('function(){
		}'),
		'onAfterChange' => new JsExpression('function(){
		}'),
		'prevArrow' => Html::tag('button', '<i class="fa fa-arrow-left"></i>', ['class' => 'slick-prev slick-arrow']),
		'nextArrow' => Html::tag('button', '<i class="fa fa-arrow-right"></i>', ['class' => 'slick-next slick-arrow']),
		'responsive' => [
			[
				'breakpoint' => 823,
				'settings' => [
					'slidesToShow'=> 7
				],
			],
			[
				'breakpoint' => 360,
				'settings' => [
					'slidesToShow'=> 3
				],
			],
		],
	],
]);

<div class="slider slider-for">
    <div><h3>1</h3></div>
    <div><h3>2</h3></div>
    <div><h3>3</h3></div>
    <div><h3>4</h3></div>
    <div><h3>5</h3></div>
    <div><h3>6</h3></div>
</div>
```