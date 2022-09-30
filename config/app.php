<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Application Cdn
	|--------------------------------------------------------------------------
	|
	| This value is the url used to load a extern assets file
	|
	*/

	'cdn' => 'http://www.cdn.net',

	/*
	|--------------------------------------------------------------------------
	| Application Name
	|--------------------------------------------------------------------------
	|
	| This value is the name of your application. This value is used when the
	| framework needs to place the application's name in a notification or
	| any other location as required by the application or its packages.
	|
	*/

	'name' => 'strew_project',

	/*
	|--------------------------------------------------------------------------
	| Application Environment
	|--------------------------------------------------------------------------
	|
	| This value determines the "environment" your application is currently
	| running in. This may determine how you prefer to configure various
	| services the application utilizes. Set this in your ".env" file.
	|
	*/

	'env' => 'production',

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/

	// 'debug' => (bool) env('APP_DEBUG', false),

	/*
	|--------------------------------------------------------------------------
	| Application URL
	|--------------------------------------------------------------------------
	|
	| This URL is used by the console to properly generate URLs when using
	| the Artisan command line tool. You should set this to the root of
	| your application so that it is used when running Artisan tasks.
	|
	*/

	'url' => 'http://www.strew_project.net',

	'server' => [
		'generate_domain' => false,
		'ip' => '127.0.0.1:80',
		'host' => [
			[
				// 'ip' => '127.0.0.0:80',
				'domains' => [
					['name' => 'strew_project.net'],
					[
						'sub' => 'www',
						'name' => 'strew_project.net',
					],
					[
						'sub' => 'mobile',
						'name' => 'strew_project.net',
					],
					[
						'sub' => 'm',
						'name' => 'strew_project.net',
					],
					[
						'sub' => 'admin',
						'name' => 'strew_project.net',
					],
				]
			],
		]
	],

	'asset_url' => null,

	/*
	|--------------------------------------------------------------------------
	| Application Timezone
	|--------------------------------------------------------------------------
	|
	| Here you may specify the default timezone for your application, which
	| will be used by the PHP date and date-time functions. We have gone
	| ahead and set this to a sensible default for you out of the box.
	|
	*/

	'timezone' => 'UTC',

	/*
	|--------------------------------------------------------------------------
	| Application Locale Configuration
	|--------------------------------------------------------------------------
	|
	| The application locale determines the default locale that will be used
	| by the translation service provider. You are free to set this value
	| to any of the locales which will be supported by the application.
	|
	*/

	'locale' => 'en',

	/*
	|--------------------------------------------------------------------------
	| Application Fallback Locale
	|--------------------------------------------------------------------------
	|
	| The fallback locale determines the locale to use when the current one
	| is not available. You may change the value to correspond to any of
	| the language folders that are provided through your application.
	|
	*/

	'fallback_locale' => 'en',

	/*
	|--------------------------------------------------------------------------
	| Faker Locale
	|--------------------------------------------------------------------------
	|
	| This locale will be used by the Faker PHP library when generating fake
	| data for your database seeds. For example, this will be used to get
	| localized telephone numbers, street address information and more.
	|
	*/

	'faker_locale' => 'en_US',






	'helpers' => [
		ROOT . '/app/helpers.php'
	],







	'browser' => isset($_SERVER) && array_key_exists('HTTP_USER_AGENT', $_SERVER) ? get_browser(null, true) : null,
	// 'browser' => isset($_SERVER['HTTP_USER_AGENT']) ? get_browser(null, true) : null,










	'os-family' => PHP_OS_FAMILY ? PHP_OS_FAMILY : null,
	'os' => PHP_OS ? PHP_OS : null,









	'autolang' => true,






	'component' => [
		'generate' => true,
		'location' => ROOT . '\app\Components',
		'namespace' => '\App\Components\\'
	],



	'mobile' => $_SERVER && isset($_SERVER['HTTP_USER_AGENT']) && ( preg_match('/iphone/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/android/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/blackberry/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/symb/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/ipad/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/ipod/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/phone/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/samsung/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/huawei/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/tecno/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/xiaomi/i', $_SERVER['HTTP_USER_AGENT']) || preg_match('/itel/i', $_SERVER['HTTP_USER_AGENT']) ),

	'collect' => [
		'#options' => [
			'exceptions' => ['/\/excepts\//', '/\\\excepts\\\/'],
			'orders' => ['reverse' => false, 'repeat' => true],
			// 'init' => false
		],
		'assets_js' => [
			'path' => ROOT . '\\' . trim(trim('public/assets/js', "/"), '\\'),
			'extension' => 'js',
			'orders' => [/*'pos:3' =>*/ '/\\\script.js/', '/\\\main.js/'], // pos:3 => // mise à jour, positioonner les éléments là où on veut 
		],
		'assets_css' => [
			'path' => ROOT . '\\' . trim(trim('public/assets/css', "/"), '\\'),
			'extension' => 'css',
			'orders' => ['/\\\default.css/', '/\\\main.css/'],
		],
	]

];
