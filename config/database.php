<?php
return [
    'default' => 'mongoprueba',
    'connections' => [
        'mongoprueba' => [
            'driver'   => 'mongodb',
            'dsn'     => 'mongodb://JonyD:JDmorales#0131@trabajo-terminal-shard-00-00-jjpal.mongodb.net:27017,trabajo-terminal-shard-00-01-jjpal.mongodb.net:27017,trabajo-terminal-shard-00-02-jjpal.mongodb.net:27017/test?ssl=true&replicaSet=trabajo-terminal-shard-0&authSource=admin',
            'database' => 'pruebas',
        ]
    ],
    'migrations' => 'migrations'
];