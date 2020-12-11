return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
        'mysql2' => [
            'driver' => 'mysql',
            'host' => env('DB2_HOST'),
            'database' => env('DB2_DATABASE'),
            'username' => env('DB2_USERNAME'),
            'password' => env('DB2_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
    ]
];