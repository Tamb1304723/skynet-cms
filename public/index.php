<?php

error_reporting(E_ALL);
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');

use Phalcon\Mvc\Application as BaseApplication;

class Application extends BaseApplication {
    /**
     * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
     */
    protected function registerServices() {
        // $di = new FactoryDefault();

        require '../_config/loader.php';
        require '../_config/services.php';

        $this->setDI($di);
    }

    public function main() {
        $this->registerServices();

        // Register the installed modules
        $this->registerModules([
            'app' => [
                'className' => 'cms_skynet\app\index',
                'path'      => '../app/index.php'
            ],
            'system'  => [
                'className' => 'cms_skynet\sys\index',
                'path'      => '../_core/system/index.php'
            ]
        ]);
    }
}

$application = new Application();
$application->main();
$response = $application->handle();
$response->send();
