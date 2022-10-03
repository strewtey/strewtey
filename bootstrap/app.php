<?php

$app = new Scraps\Foundation\App(ROOT);

$app->make([
	Scraps\Config\Config::class,
	Scraps\Lang\Lang::class,
	Scraps\Collects\Collect::class,
	[Scraps\Component\Component::class, 'method' => 'init'],
	[Scraps\Provider\Provider::class, 'method' => 'init'],
	[Scraps\Helper\Helper::class, 'method' => 'load', 'args' => ['file' => ROOT . '\vendor\strewtey\framework\src\Scraps\View\helpers.php'], 'callback' => function($res){
		if(!Scraps\View\View::$helper){ Scraps\View\View::$helper = true; }
	}],
	[Route::class, 'method' => 'run'],
]);

return $app;