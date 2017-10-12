<?php
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');
define('APPLICATION_ENV', 'local');
return new \Phalcon\Config([
    'database'      => [
        'mysql'         =>      [
            'adapter'       =>      'Mysql',
            'host'          =>      'localhost',
            'username'      =>      'root',
            'password'      =>      'mysql',
            'dbname'        =>      'phalcon_db',
            'port'          =>      3306
        ],
        'mongoDB'       =>      [

        ]
    ],
    'application'   => [
        'baseUri'           =>      '/',
        'fileDir'           =>      '../resources/data/',
        'controllersDir'    =>      '../app/controllers/',
        'langDir'           =>      '../resources/lang/',
        'logsDir'           =>      '../storages/logs/',
        'viewsDir'          =>      '../storages/built/'
    ],
    'status'        =>  [
        'debug'             =>      true,
        'desableCopy'       =>      false,
        'desableConsole'    =>      false
    ]
]);

?>
