<?php

$app = new Scraps\Foundation\App(ROOT);

$app->make([

	Scraps\Config\Config::class,
	Scraps\Lang\Lang::class,
	Scraps\Enters\Enter::class,
	[Enter::class, 'method' => 'run'],

]);

return $app;