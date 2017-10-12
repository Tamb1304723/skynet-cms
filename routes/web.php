<?php

// $router->add('/:controller/:action', [
//     'controller' => 1,
//     'action'     => 2,
// ])->setName('app');

$router->add("/products/:action", [
    'controller' => 'products',
    'action'     => 1,
])->setName('app-product');
