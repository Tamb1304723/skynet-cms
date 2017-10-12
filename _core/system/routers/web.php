<?php
$router->add("/admin", [
    'module'     => 'system',
    'controller' => 'admin',
    'action'     => 'index',
])->setName('admin');

$router->add("/admin/users", [
    'module'     => 'system',
    'controller' => 'users',
    'action'     => 'index',
])->setName('users');

$router->add("/login", [
    'module'     => 'system',
    'controller' => 'admin',
    'action'     => 'login',
])->setName('login');
//
// $router->add("/admin/users", [
//     'module'     => 'system',
//     'controller' => 'users',
//     'action'     => 'index',
// ])->setName('admin-users');

$router->add("/admin/articles", [
    'module'     => 'system',
    'controller' => 'articles',
    'action'     => 'index',
])->setName('articles');

$router->add("/admin/articles/save", [
    'module'     => 'system',
    'controller' => 'articles',
    'action'     => 'save',
])->setName('articles-save');

$router->add("/admin/articles/addcate", [
    'module'     => 'system',
    'controller' => 'articles',
    'action'     => 'addcate',
])->setName('articles-addcate');

$router->add("/admin/articles/savecate", [
    'module'     => 'system',
    'controller' => 'articles',
    'action'     => 'savecate',
])->setName('articles-savecate');

$router->add("/admin/articles/change", [
    'module'     => 'system',
    'controller' => 'articles',
    'action'     => 'change',
])->setName('articles-change');

$router->add("/admin/accounts", [
    'module'     => 'system',
    'controller' => 'accounts',
    'action'     => 'index',
])->setName('accounts');
// $router->add("/admin/products/:action", [
//     'module'     => 'system',
//     'controller' => 'products',
//     'action'     => 1,
// ])->setName('backend-product');
//
// $router->add("/admin/test/:action", [
//     'module'     => 'system',
//     'controller' => 'products',
//     'action'     => 1,
// ]);
//
// $router->add('/template/{dir}', [
//         'module'        => 'system'
//     ,   'controller'    => 'file'
//     ,   'action'        => 'index'
// ]);
