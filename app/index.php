<?php

namespace cms_skynet\app;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Mvc\View\Engine\Volt\Complier;
use Phalcon\DiInterface;
use Phalcon\Events\Manager;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Db\Adapter\Pdo\Mysql;
use Phalcon\Mvc\ModuleDefinitionInterface;

class index implements ModuleDefinitionInterface {
    /**
     * Registers the module auto-loader
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null) {
        $loader = new Loader();
        $loader->registerNamespaces([
            'cms_skynet\app\Controllers' => '../app/controllers',
            'cms_skynet\app\Models' => '../app/models/',
        ]);

        $loader->register();
    }

    /**
     * Registers services related to the module
     *
     * @param DiInterface $di
     */
    public function registerServices(DiInterface $di) {
        // Registering a dispatcher
        $di->set('dispatcher', function () {
            $dispatcher = new Dispatcher();
            $eventManager = new Manager();

            // Attach a event listener to the dispatcher (if any)
            // For example:
            // $eventManager->attach('dispatch', new \My\Awesome\Acl('app'));

            $dispatcher->setEventsManager($eventManager);
            $dispatcher->setDefaultNamespace('cms_skynet\app\Controllers\\');
            return $dispatcher;
        });

        // Register Volt as a service
        $di->set("voltService", function ($view, $di) {
            $config = $this->getConfig();
            $volt = new Volt($view, $di);

            $volt->setOptions([
                "compiledPath"  => $config->application->viewsDir,
                "compiledExtension" => ".compiled",
            ]);

            return $volt;
        });

        $di->set("view", function () {
            $view = new View();
            $view->setViewsDir("../app/views/");

            $view->registerEngines([
                ".volt" => "voltService",
            ]);

            return $view;
        });
    }
}
