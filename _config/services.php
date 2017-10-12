<?php

$di = new \Phalcon\DI\FactoryDefault();

// Shared configuration service
$di->setShared('config', function(){
    $config = include BASE_PATH . '/_config/config.php';
    // echo '<pre>'; print_r($config); echo '</pre>';  die;

    // override config when have config at local file
    if(file_exists(BASE_PATH . '/_config/config.' . APPLICATION_ENV . '.php')){
        $config->merge(include BASE_PATH . '/_config/config.' . APPLICATION_ENV . '.php');
    }
    // else { echo "not found file ".APPLICATION_ENV;}
    // echo '<pre>'; print_r($config); echo '</pre>';  die;
    return $config;
});

// Registering a router
$di->set('router', function () {
    $router = new \Phalcon\Mvc\Router();
    $router->setDefaultModule("app");
    
    //Remove trailing slashes automatically
    $router->removeExtraSlashes(true);
    require_once '../_core/router.php';
    return $router;
});


// Registering a dbconnection
$di->set('db', function(){
    $config = $this->getConfig();
    return new \Phalcon\Db\Adapter\Pdo\Mysql($config->database->mysql->toArray());
});

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->setShared('url', function () {
    $config = $this->getConfig();

    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
});
