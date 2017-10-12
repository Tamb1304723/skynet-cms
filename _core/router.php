<?php

// $router->add('/file/(/.*)', [
//         'module'        =>  'system'
//     ,   'controller'    =>  'file'
//     ,   'action'        =>  'index'
//     ,   'filename'      =>  1
// ])->setName('core_routes_file');

// $router->notFound([
//         'module'        =>  'system'
//     ,   'controller'    =>  'index'
//     ,   'action'        =>  'route404'
// ]);

$router->add("/file/([a-z]+)/:params", [
        'module'        => 'system'
    ,   'controller'    => 'file'
    ,   'action'        => 'index'
    ,   'type'          => 1
    ,   'fileName'      => 2
])->setName('file');

//include routes admin
foreach (glob("../_core/system/routers/*.php") as $filename) {
    include_once $filename;
}

//include routes app
foreach (glob( "../routers/*.php") as $filename) {
    include_once $filename;
}
