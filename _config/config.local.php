<?php
return new \Phalcon\Config([
    'database'      => [
        'mysql'         =>      [
            'adapter'       =>      'Mysql',
            'host'          =>      'localhost',
            'username'      =>      'root',
            'password'      =>      'mysql',
            'dbname'        =>      'phalcon_db',
            'port'          =>      3306
        ]
    ]
]);
?>
