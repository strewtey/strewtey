<?php

return [
	'default_connexion' => 'mysql',

	// 'url' => '127.0.0.1',
	'url' => 'http://localhost',

	'connexion' => [
		'sqlite' => [
			'driver' => 'sqlite',
			// 'url' => ['DATABASE_URL'],
			// 'database' => ['DB_DATABASE', database_path('database.sqlite')],
			'prefix' => '',
			'foreign_key_constraints' => ['DB_FOREIGN_KEYS', true],
		],
		'mysql' => [
			'driver' => 'mysql',
			// 'url' => ['DATABASE_URL'],
			'host' => '127.0.0.1',
			'port' => '3306',
			'database' => 'test',
			'username' => 'root',
			'password' => '',
			'unix_socket' => '',
			'charset' => 'utf8mb4',
			'collation' => 'utf8mb4_general_ci',
			'prefix' => '',
			'prefix_indexes' => true,
			'strict' => true,
			'engine' => "InnoDB",
			'extension' => 'pdo',
			// 'options' => extension_loaded('pdo_mysql') ? array_filter([
			//     PDO::MYSQL_ATTR_SSL_CA => ['MYSQL_ATTR_SSL_CA'],
			// ]) : [],
		],
		'pgsql' => [
			'driver' => 'pgsql',
			// 'url' => ['DATABASE_URL'],
			'host' => '127.0.0.1',
			'port' => '5432',
			'database' => 'forge',
			'username' => 'forge',
			'password' => '',
			'charset' => 'utf8',
			'prefix' => '',
			'prefix_indexes' => true,
			'schema' => 'public',
			'sslmode' => 'prefer',
		],
		'sqlsrv' => [
			'driver' => 'sqlsrv',
			// 'url' => ['DATABASE_URL'],
			'host' => 'localhost',
			'port' => '1433',
			'database' => 'forge',
			'username' => 'forge',
			'password' => '',
			'charset' => 'utf8',
			'prefix' => '',
			'prefix_indexes' => true,
		],

	],
];
